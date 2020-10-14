<?php
session_start();

$ser="localhost";
$user="root";
$pass="";
$db="quickbus";

$con=new mysqli($ser,$user,$pass,$db);


return $con;

?>