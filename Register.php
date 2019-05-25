<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/register.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <div id="container">
        <?php
    
    include "INCLUDE/Head.php";

        if(isset($_POST['uname']) && isset($_POST['mail']) && isset($_POST['psw'])){
        
            include("INCLUDE/db.php");
            
            $uname = $_POST['uname'];
            $mail = $_POST['mail'];
            $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);

            $query = "INSERT INTO user (username,email,password) VALUES ('$uname','$mail','$psw')";
            error_log($query);
            $sql= "SELECT * FROM user WHERE username='$uname' OR email='$mail'";

            $result = mysqli_query($connect,$sql);

                if(mysqli_num_rows($result)>=1){
                   echo"Name/Email already exists";}

                else{
                    mysqli_query($connect,$query);
                    header("location: Login.php");
                }
                


        }
?>
        <main>
            <form method="post">
                <div class="rcontainer">
                    <div id="un">
                        <input type="text" name="uname" class="question" required autocomplete="off" />
                        <label for="uname"><span>Username:</span></label>
                    </div>
                    <div id="em">
                        <input type="text" name="mail" class="question" required autocomplete="off" />
                        <label for="em"><span>Email:</span></label>
                    </div>
                    <div id="pw">
                        <input type="password" name="psw" class="question" required autocomplete="off" />
                        <label for="psw"><span>Password:</span></label>
                    </div>
                    <input type="submit" value="Register">
                    <label>
                        <input type="checkbox" checked="checked" name="TOS" required> Terms of Service
                    </label>
                </div>
            </form>
        </main>

        <?php
include("INCLUDE/footer.php");
?>
    </div>
</body>

</html>