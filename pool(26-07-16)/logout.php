<?php session_start();

session_destroy();
echo "destroyed" ;
header('location:index.php');
?>