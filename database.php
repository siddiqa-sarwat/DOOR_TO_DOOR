<?php

$host="localhost";
$username="root";
$password="";
$dbname="doortodoor_db";

$mysqli=new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno){
    die("Conncection error : ".$mysqli->connect_error);
}
return $mysqli;
?>