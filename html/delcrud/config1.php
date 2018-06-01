<?php

$link=mysqli_connect("localhost","root","root","demo");
if($link === false)
die(mysqli_error());
else
echo "successful";
?>
