<?php session_start(); ?>
<?php
$a=$_SESSION["count"];
$pid=$_GET["t1"];
array_push($_SESSION['cart'],$pid);
$a++;
$_SESSION["count"]=$a;

echo $_SESSION["count"]; 
header("Location: http://localhost/eshopz/index.php");
?>
