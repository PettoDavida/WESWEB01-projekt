<?php 
session_start();
session_destroy();
$origin = $_SERVER['HTTP_REFERER'];
if(isset($origin)){
header("Location: $origin");
}else{
    header("Location: index.php");
}
?>