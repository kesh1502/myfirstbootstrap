<?php

$server_name = "localhost";
$user_name = "shubhum";
$password = "";
$db_name = "microsoft";
//$conn = mysqli_connect($server_name ,$user_name,$password , $db_name);
try
{
 $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $user_name, $password);
}
catch(PDOException $e)
 {
    echo   "<br>" . $e->getMessage();
 }



?>