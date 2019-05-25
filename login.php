<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <link rel="stylesheet" href="./CSS/form.css">
</head>

<body>
    <div id="container">
        <?php
        include("INCLUDE/Head.php");
    


    if(isset($_POST['usname']) && isset($_POST['Pass'])){

        include("INCLUDE/db.php");
        
        $usname = $_POST['usname'];
        $Pass = $_POST['Pass'];



        $query = "SELECT * FROM user WHERE username='$usname'";

        $result = mysqli_query($connect, $query);

        $error = false;
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($Pass, $row['password'])){
            
                $_SESSION['valid_login'] = true;
                $_SESSION['user_id'] = $row['UserId'];
                $_SESSION['user'] = $row;
                setcookie(login, true, time()+60*60*60*60);
                header("location: index.php");
            }

        }else{
            $error = true;
            echo("Invalid!");
            header("refresh: 2");
        }
    }
    ?>
        <main>
            <form method="post">
                <div id="lcontainer">
                    <div id="un">
                        <input type="text" name="usname" class="question" required autocomplete="off" />
                        <label for="usname"><span>Username:</span></label>
                    </div>
                    <div id="pw">
                        <input type="password" name="Pass" class="question" required autocomplete="off" />
                        <label for="Pass"><span>Password:</span></label>
                    </div>
                    <input type="submit" value="Log In">
                    <div id="reg">Don't have an account? <br> <a href="Register.php">Create account</a></div>
                </div>
            </form>
        </main>








        <?php
include("INCLUDE/footer.php")
?>
    </div>
</body>

</html>