<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["flag"]);
unset($_SESSION["class"]);
echo("login out successable");
header("location:index.php");

?>