<?php 
session_start();
?>
<head>

    <link rel="stylesheet" href="menu.css">

</head>


<nav>

    <a href="home.php">Home</a>
    <a href="info.php">Info</a>
    <a href="Stars.php">Stars</a>
    <a href="profil.php">Profil</a>
    <p><?php if(isset($_SESSION['user'])){echo $_SESSION['user']['Username'];}?></p>
</nav>