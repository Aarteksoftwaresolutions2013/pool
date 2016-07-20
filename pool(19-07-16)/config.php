<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="root";
/*
$dbhost="localhost";
$dbuser="adminYqv1B3G";
$dbpass="G1WGJUMGaURD";*/
 $con=mysqli_connect($dbhost,$dbuser,$dbpass,'pool');
if(mysqli_connect_errno())
{
echo "failed to connect to mysql:".mysqli_connect_error();
die();
}

/*


$dbhost="localhost";
$dbuser="root";
$dbpass="root";
 $con=mysqli_connect($dbhost,$dbuser,$dbpass,'pool');
if(mysqli_connect_errno())
{
echo "failed to connect to mysql:".mysqli_connect_error();

}*/
?>