<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/logsql.css">
</head>

<body>
    <div id="container">
        <?php
        include("INCLUDE/Head.php");
    ?>

        <?php 


    if(isset($_POST['usname']) && isset($_POST['Pass'])){

        $connect = mysqli_connect("localhost","root","","apex");

        $usname = $_POST['usname'];
        $Pass = $_POST['Pass'];



        $query = "SELECT * FROM user WHERE username='$usname' AND password = '$Pass'";

        $result = mysqli_query($connect, $query);

        $error = false;
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);

            $_SESSION['valid_login'] = true;
            $_SESSION['user_id'] = $row['UserId'];
            $_SESSION['user'] = $row;
            

        }else{
            $error = true;
            echo("Invalid!");
        }
    }
    ?>
        <main>
            <form method="post">
                <div id="lcontainer">
                    <div id="un">
                        <label for="usname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="usname" required>
                    </div>
                    <div id="pw">
                        <label for="Pass"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="Pass" required>
                    </div>
                    <input type="submit" value="Log In">
                </div>
            </form>
        </main>








        <?php
include("INCLUDE/footer.php")
?>
    </div>
</body>

</html>