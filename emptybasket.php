<?php
session_start();
unset($_SESSION["count"]);
unset($_SESSION["cart"]);
header("Location: http://localhost/eshopz");
?>