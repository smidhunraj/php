<?php
echo "hello";
require_once "config.php";

$sql="select * from employees";

if($result=mysqli_query($link,$sql)){
while($row=mysqli_fetch_array($result)){

echo $row['name']."     ";
}
mysqli_free_result($result);

}else
echo mysqli_error($link);
mysqli_close($link);


?>
