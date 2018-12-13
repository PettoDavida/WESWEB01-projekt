<?php

$dbc = mysqli_connect("localhost","root","","users");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['user']['Username'];
    if(isset($_POST["new_email"]) && strlen($_POST["new_email"]) > 0) {
        $newEmail = $_POST["new_email"];
        $query = "UPDATE user SET Email='$newEmail' WHERE Username='$username';";
        mysqli_query($dbc, $query);
    }

    if(isset($_POST["old_password"]) && isset($_POST["new_password"]) && isset($_POST["confirm_password"])) {
        $query = "SELECT Password FROM user WHERE Username='$username';";
        $result = mysqli_query($dbc, $query);

        $row = mysqli_fetch_array($result);
        $oldPassword = $row["Password"];

        if($oldPassword == $_POST["old_password"]) {
            if($_POST["new_password"] === $_POST["confirm_password"]) {
                $newPassword = $_POST["new_password"];
                $query = "UPDATE user SET Password='$newPassword' WHERE Username='$username'";
                mysqli_query($dbc, $query);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
    $query = "SELECT * FROM user WHERE username='" . $_SESSION['user']['Username'] . "'";

    $result = mysqli_query($dbc, $query);
    if(!$result) {
        echo "Error";
    }

    $row = mysqli_fetch_array($result);

    ?>
    <p>Username: <?php echo $row["Username"]; ?></p>
    <p>Email: <?php echo $row["Email"]?></p>
    <form action="User.php" method="post">

        <input type="email" name="new_email" placeholder="New Email">
        <input type="password" name="old_password" placeholder="Old Password">
        <input type="password" name="new_password" placeholder="New Password">
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <input type="submit" value="Spara">
    </form>    
</body>
</html>