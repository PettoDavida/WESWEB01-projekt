<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <?php


    include("INCLUDE/db.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['user']['username'];
    if(isset($_POST["new_email"]) && strlen($_POST["new_email"]) > 0) {
        $newEmail = $_POST["new_email"];
        $query = "UPDATE user SET email='$newEmail' WHERE username='$username';";
        mysqli_query($connect, $query);
    }

    if(isset($_POST["old_password"]) && isset($_POST["new_password"]) && isset($_POST["confirm_password"])) {
        $query = "SELECT Password FROM user WHERE username='$username';";
        $result = mysqli_query($connect, $query);

        $row = mysqli_fetch_array($result);
        $oldPassword = $row["Password"];

        if($oldPassword == $_POST["old_password"]) {
            if($_POST["new_password"] === $_POST["confirm_password"]) {
                $newPassword = $_POST["new_password"];
                $query = "UPDATE user SET password='$newPassword' WHERE username='$username'";
                mysqli_query($connect, $query);
            }
        }
    }
}

?>
</head>

<body>
    <div id="container">
        <?php include("INCLUDE/head.php")?>
        <main>
            <?php
        $query = "SELECT * FROM user WHERE username='" . $_SESSION['user']['username'] . "'";

        $result = mysqli_query($connect, $query);
        if(!$result) {
            echo "Error";
        }

        $row = mysqli_fetch_array($result);

        ?>
            <div id="name">
                <h2>Hi Again, <?php echo $row["username"]; ?></h2>
            </div>

            <div id="mail">
                <h3>Email: <?php echo $row["email"]?></h3>
            </div>
            <div id="id">
                <h3>ID: <?php echo $row["id"]?></h3>
            </div>
            <form action="profile.php" method="post">
                <div id="email">
                    <input type="email" name="new_email" class="question" autocomplete="off" />
                    <label for="new_email"><span>New Email:</span></label>
                    <br>
                </div>
                <div id="password">
                    <input type="password" name="oldpass" class="question" autocomplete="off" />
                    <label for="oldpass"><span>Old Password:</span></label>
                    <br>
                    <input type="password" name="newpass" class="question" autocomplete="off" />
                    <label for="newpass"><span>New Password:</span></label>
                    <br>
                    <input type="password" name="conpass" class="question" autocomplete="off" />
                    <label for="conpass"><span>Confirm Password:</span></label>

                    <br>

                </div>
                <div id="submit">
                    <input type="submit" value="Change">
                </div>
            </form>
        </main>
        <?php include("INCLUDE/footer.php")?>
    </div>
</body>

</html>