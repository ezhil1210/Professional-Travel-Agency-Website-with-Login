<?php 

$sName = "sql6.freesqldatabase.com";
$uName = "sql6638158";
$pass = "KbuBB6I5YZ";
$db_name = "sql6638158";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}