<?php


$databaseHost = '127.0.0.1';
$databaseName = 'e_meet';
$databaseUsername = 'root';
$databasePassword = 'Cicoare2';

$mysqli= mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($mysqli === false){
   // echo("no1");
    die("ERROR: Could not connect. " . mysqli_connect_error());
}else{
    //echo("no");
}
?>

