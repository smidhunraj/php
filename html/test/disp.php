<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "Database.php";
$pdo=Database::connect();
$sql="select * from test";

foreach($pdo->query($sql) as $row){
echo $row['name'].' <a href="u.php?id= '.$row['id'].' " > update </a> <br> ';
}

Database::disconnect();


?>
<a href="u.php? id = 3">kkkk</a>
