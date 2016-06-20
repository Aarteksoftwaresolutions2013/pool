<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="root";
 $con=mysqli_connect($dbhost,$dbuser,$dbpass,'pool');
if(mysqli_connect_errno())
{
echo "failed to connect to mysql:".mysqli_connect_error();

}
?>