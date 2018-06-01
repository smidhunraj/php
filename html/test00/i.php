<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  require 'Database.php';
if ( !empty($_POST)) {
$pdo=Database::connect();
//$name=$_POST['name'];
$name = $_POST['name'];
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT INTO `test`(`name`) VALUES (?);";
$pdo->prepare($sql)->execute(array($name));

  header("Location: t.php");
  Database::disconnect();

}


?>


 <!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="i.php">
<input type="text" name ="name" value="<?php echo !empty($name)?$name:'';?>">
<button type="submit" >Create</button>
</form>
</body>
</html>
