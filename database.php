<link rel="stylesheet" href="database.css">

<form>

<input type="text" name="search">

<input type="submit">

</form>

<form action="" method="GET">

<input type="submit" value="Name" name="order">

<input type="submit" value="Age" name="order">

<input type="submit" value="Views" name="order">

</form>

<?php

$search ="";
if(isset ($_GET['search'])){
$search = $_GET['search'];
}

$order ="";
if(isset ($_GET['order'])){
if(isset ($_SESSION['order']) && $_GET['order'] == $_SESSION['order']){
    $order = "ORDER BY " . $_GET['order'] . " DESC";
    $_SESSION['order'] ="";    
}
else{
    $order = "ORDER BY " . $_GET['order'] . " ASC";
    $_SESSION['order'] = $_GET['order'];
}
}

$dbc = mysqli_connect("localhost","root","","fri");

$query = "SELECT * FROM fri WHERE name like '%$search%' $order";

$result = mysqli_query($dbc,$query);
?>
<div class="container">
<?php
while($row = mysqli_fetch_array($result)){

?>

<div class="box_container">

    <h1 id="Head" class="pot"><?php echo str_replace("_", " ", $row['name']); ?></h1> 
    
    <p id="neck" class="pot"><?php echo $row['age']; ?></p>
    
    <p id="body" class="pot"><?php echo $row['views']; ?></p>

</div>

<?php
}

?>
</div>

