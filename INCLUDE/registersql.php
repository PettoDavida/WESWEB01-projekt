<?php
        if(isset($_POST['uname']) && isset($_POST['mail']) && isset($_POST['psw'])){
        
            $connect = mysqli_connect("localhost","root","","apex");

            $uname = $_POST['uname'];
            $mail = $_POST['mail'];
            $psw = $_POST['psw'];

            $query = "INSERT INTO user (username,email,password) VALUES ('$uname','$mail','$psw')";

            $sql= "SELECT * FROM user WHERE username='$uname' OR Email='$mail'";

            $result = mysqli_query($connect,$sql);

                if(mysqli_num_rows($result)>=1){
                   echo"Name/Email already exists";}

                else{
                    mysqli_query($dbc_form,$query);
                    header("location: Login.php");
                }
                mysqli_close($dbc_form);


        }
?>
<form method="post">
    <div class="rcontainer">

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        
        <label for="mail"><b>E-mail</b></label>
        <input type="mail" placeholder="Enter E-mail" name="mail" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <input type="submit" value="Register">
        <label>
        <input type="checkbox" checked="checked" name="TOS"> Terms of Service
        </label>
    </div>
</form>