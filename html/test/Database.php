<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Database{
private static $dbHost="localhost";
private static $dbName="newtest";
private static $dbUsername="root";
private static $dbpass="root"; 
private static $cont=null;
public function __construct(){

die("Cant initialise");
}

public static function connect(){

if(self::$cont==null){
try{
 self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbpass); 

echo "working...........";

}catch(PDOException $e){echo ($e->getmessage());}
}



return self::$cont;

}

public static function disconnect(){
self::$cont=null;
}


}







?>
