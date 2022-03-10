<?php 

$DBhost="localhost";
$DBuser ="root";
$DBpassword="";
$DBname = "php_crud_api_db";


$conn =mysqli_connect($DBhost,$DBuser,$DBpassword ,$DBname );
if(!$conn){
     die("connection failled: " . mysqli_connect_error());
}
?>
