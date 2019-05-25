<?php
$weapon = $_COOKIE['weapon'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <link rel="stylesheet" href="./CSS/weapon.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $weapon; ?></title>
</head>

<body>
    <?php
     include("INCLUDE/db.php");
     
$query = "SELECT * FROM Weapon where name like '$weapon' ";

$result = mysqli_query($connect,$query);

while($row = mysqli_fetch_array($result)){

?>
    <div id="container">
        <?php include("INCLUDE/head.php"); ?>
        <main>
            <div class="box_container">
                <h1 id="Head"><?php echo $row['name']; ?></h1>

                <img id="neck" src="./IMAGES/Weapons/<?php echo $row['name']; ?>.png" alt="<?php echo $row['name']; ?>">

                <p class="body"><b>Type:</b> <?php echo $row['type']; ?></p>

                <p class="body"><b>Bullets:</b> <?php echo $row['bullets']; ?></p>

                <p class="body"><b>Damage Per Shot:</b> <?php echo $row['damage']; ?></p>

                <p class="body"><b>Bullets per Minute:</b> <?php echo $row['firerate']; ?></p>
            </div>
            <?php } ?>
        </main>
        <?php include("INCLUDE/footer.php"); ?>
    </div>

</body>

</html>