<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "doortodoor_db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if ($con===false)
{
  die("Connection failed: " . mysqli_connect_error());  
}

?>

