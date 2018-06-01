<?php
class Database{
/*private static $dbhost="localhost";
private static $dbname="newtest";
private static $dbusername="root";
private static $password="root";
private static $cont=null;
   */

 private static $dbName = 'newtest' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';
   private static $cont=null;

    public function __construct() {
        die('Init function is not allowed');
    }
     
/*public static function connect(){

if(null == self::$cont)
try{


//self::$cont=new PDO("mysql:host".self::$dbhost.";"."dbname".self::$dbname,self::$dbusername,self::$password); 
self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
}catch (PDOException $e){
echo ($e->getmessage());
}


echo"connected........";
return self::$cont;
}*/

   
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
public static function disconnect(){

self::$cont=null;
}

}



?>
