<?php
require_once 'config.php';
$sql="select * from employees";
$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($result))
{
echo $row['id'];
echo $row['name'];
echo $row['address'];
echo $row['salary'];
}
mysqli_free_result($result);
mysqli_close($link);
?>
