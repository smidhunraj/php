<?php
$name="";
$address="";
$salary="";
$name_err="";
$address_err="";
$salary_err="";


require_once "config.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
 {
$input_name=trim($_POST["name"]);
$input_address=trim($_POST["address"]);
$input_salary=trim($_POST["salary"]);
if(empty($input_name))
{
$name_err="please enter a name";
}
else
{
$name=$input_name;
}
if(empty($input_address))
{
$address_err="please enter address";
}
else
{
$address=$input_address;
}
if(empty($input_salary))
{
$salary_err="please enter salary";
}
else
{
$salary=$input_salary;
}

if(empty($name_err) && empty($address_err) && empty($salary_err))
{
$sql="insert into employees(name,address,salary) values (?,?,?)";
$stmt=mysqli_prepare($link,$sql);
mysqli_stmt_bind_param($stmt,"ssd",$param_name,$param_address,$param_salary);
$param_name=$name;
$param_address=$address;
$param_salary=$salary;
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
}mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
<input type="text" name="name" class="form-control" value="<?php echo $name; ?>"></div>
 <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
<input type="text" name="address" class="form-control" value="<?php echo $address; ?>"></div>
    <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                   
<input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
<input type="submit" class="btn btn-primary" value="Submit">
</form>
</body>

</html>
