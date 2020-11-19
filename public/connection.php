<?php 

$server     = "localhost";
$port       = 3307;
$username   = "root";
$password   = "root";
$db         = "schoolthaughts";

$conn   = mysqli_connect( $server, $username, $password, $db, $port );

if ( !$conn ) {
   die( "Connection failed :".mysqli_connect_error() ); 
}/*
else{

}
echo "";*/
?>