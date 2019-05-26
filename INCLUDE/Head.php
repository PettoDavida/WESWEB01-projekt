<img id="head" src="./IMAGES/Banner.png" alt="Banner">

<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">

<?php
session_start();
?>


<div id="nav">
    <div id="weapons"> <a href="weapons.php">Weapons</a> </div>
    <div id="legends"> <a href="legends.php">Legends</a> </div>
    <?php if(isset($_SESSION['valid_login']) && $_SESSION['valid_login'] === true){ ?> 
    <div id="chat"> <a href="chats.php">Chats</a> </div>
    <?php }else{?>
        <div id="chat"> <a href="login.php">Chats</a> </div><?php } ?>
    <?php if(isset($_SESSION['valid_login']) && $_SESSION['valid_login'] === true){ ?> 
    <div id="profile"> <a href="profile.php">Profile</a> </div>
    <?php }else{?>
        <div id="profile"> <a href="login.php">Profile</a> </div><?php } ?>

    <?php
        if(isset($_SESSION['valid_login']) && $_SESSION['valid_login'] === true){
            ?>  <div id="signin"><a href="logout.php">Log out</a></div> <?php
        }else{
            ?> <div id="signin"><a href="login.php">Sign in</a></div> <?php
        }
    ?>
</div>
