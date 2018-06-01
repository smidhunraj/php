<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 require 'Database.php';
if(!empty($_POST)){
$pdo=Database::connect();
$name=$_POST['name'];
if(!empty($name)){
$sql="INSERT INTO `test`(`name`) VALUES (?);";

$pdo->prepare($sql)->execute(array($name));
 Database::disconnect();
}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="i.php"method="post">
<input type="text" name="name" value="<?php echo !empty($name)? $name:'';  ?>" >
<button type="submit">submit</button>
</form>
</body>
</html>
