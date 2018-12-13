<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
            if(isset($_POST['usname']) && isset($_POST['Pass'])){
    
                $dbc_form = mysqli_connect("localhost","root","","users");
    
                $usname = $_POST['usname'];
                $Pass = $_POST['Pass'];
    
    
    
                $query = "SELECT * FROM user WHERE username='$usname' AND password = '$Pass'";
    
                $result = mysqli_query($dbc_form, $query);
    
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result);
    
                    $_SESSION['valid_login'] = true;
                    $_SESSION['user_id'] = $row['UserId'];
                    $_SESSION['user'] = $row;
                    header("location: home.php");
    
                }
    
    
            }
    ?>
</head>
<body>
<form method="post">
    <div class="lcontainer">

        <label for="usname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="usname" required>

        <label for="Pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="Pass" required>

        <input type="submit" value="Log In">
    </div>
</form>
</body>
</html>