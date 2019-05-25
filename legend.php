<?php
     $legend = $_COOKIE['legend'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">
    <link rel="stylesheet" href="./CSS/legend.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $legend; ?></title>
</head>

<body>
    <?php
 include("INCLUDE/db.php");
$query = "SELECT 
legend.name,
legend.role,
lore.title AS lore_title,
lore.content AS lore_content,
passive.name AS passive_name,
passive.description AS passive_desc,
tactical.name AS tactical_name,
tactical.description AS tactical_desc,
ultimate.name AS ultimate_name,
ultimate.description AS ultimate_desc
FROM legend
INNER JOIN passive ON legend.passive=passive.id
INNER JOIN tactical  ON legend.tactical=tactical.id
INNER JOIN ultimate ON legend.ultimate=ultimate.id
INNER JOIN lore ON legend.lore=lore.id
WHERE legend.name LIKE '$legend';";

$result = mysqli_query($connect,$query);

while($row = mysqli_fetch_array($result)){

?>
    <div id="container">
        <?php include("INCLUDE/head.php"); ?>
        <main>
            <div class="box_container">
                <h1 id="name"><?php echo $row['name']; ?></h1>

                <img id="neck" src="./IMAGES/Legends/<?php echo $row['name']; ?> Apex Legends.png"
                    alt="<?php echo $row['name']; ?>">
                <div id="lore">
                    <p class="body" id="lt"><b> <?php echo $row['lore_title']; ?>:</b></p>

                    <p class="body" id="lc"><?php echo $row['lore_content']; ?></p>
                </div>
                <div id="abilities">
                    <div id="passive">
                        <p class="title"><b> <?php echo $row['passive_name']; ?>:</b></p>

                        <p class="body"> <?php echo $row['passive_desc']; ?></p>
                    </div>
                    <div id="tactical">
                        <p class="title"><b> <?php echo $row['tactical_name']; ?>:</b></p>

                        <p class="body"> <?php echo $row['tactical_desc']; ?></p>
                    </div>
                    <div id="ultimate">
                        <p class="title"><b> <?php echo $row['ultimate_name']; ?>:</b></p>

                        <p class="body"> <?php echo $row['ultimate_desc']; ?></p>
                    </div>
                </div>

            </div>
            <?php } ?>
        </main>
        <?php include("INCLUDE/footer.php"); ?>
    </div>
</body>

</html>