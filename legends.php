<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/legends.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Legends</title>
</head>

<body>
    <div id="container">

        <?php include("INCLUDE/head.php");
        
        ?>
        <main>
            <div id="searchbar">
                <form>
                    <div>
                        <input type="text" name="search">

                        <input type="submit" value="Search">
                    </div>
                </form>

                <form action="legends.php" method="GET">
                    <div>
                        <input type="submit" value="Name" name="order">

                        <input type="submit" value="role" name="order">
                    </div>
                </form>
            </div>
            <?php
$type = "name";
if(isset($_GET['order'])){
    $type = $_GET['order'];
}
$search ="";
if(isset ($_GET['search'])){
$search = $_GET['search'];
}

$order ="";
if(isset ($_GET['order'])){
if(isset ($_SESSION['order']) && $_GET['order'] == $_SESSION['order']){
    $order = $_GET['order'] . " DESC";
    $_SESSION['order'] ="";    
}
else{
    $order = $_GET['order'] . " ASC";
    $_SESSION['order'] = $_GET['order'];
}
}
include("INCLUDE/db.php");

        $query = "SELECT * FROM Legend";

        if(isset($_GET['search'])){
            $query = $query . " WHERE $type like '%$search%'";
        }

        if(isset($_GET['order'])){
            $query = $query . " ORDER BY $order";
        }


$result = mysqli_query($connect,$query);
?>
            <div class="container">
                <?php
while($row = mysqli_fetch_array($result)){

?>

                <div class="box_container">

                    <img onclick="document.cookie='legend=<?php echo $row['name']; ?>;';window.location.replace('//localhost:8012/Webserver(php,html)/Slutprojekt/legend.php')"
                        src="./IMAGES/Legends/<?php echo $row['name']; ?> Apex Legends.png"
                        alt="<?php echo $row['name']; ?>">

                    <h1 id="Head" class="pot"><?php echo $row['name']; ?></h1>

                    <p id="body" class="pot"><?php echo $row['role']; ?></p>

                </div>

                <?php
}

?>

        </main>
        <?php include("INCLUDE/footer.php")?>

    </div>
</body>

</html>