<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 require 'database.php';
 //$name=""; $panno=""; $mobile="";  $permanentaddress="";  $temporaryaddress="";  $basicpay"";  $hra="";  $da="";  $others="";  $year="";
 if ( !empty($_POST)) {
        // keep track validation errors
       
        $name = $_POST['name'];
        $panno=$_POST['panno']; $mobile=$_POST['mobile'];  $permanentaddress=$_POST['permanentaddress'];  
$temporaryaddress=$_POST['temporaryaddress'];  
$basicpay=$_POST['basicpay']; 
 $hra=$_POST['hra']; 
 $da=$_POST['da']; 
 $others=$_POST['others']; 
 $year=$_POST['year'];
         
        // validate input
        $valid = true;
        
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `income_tax`(`name`, `panno`, `mobile`, `permanentaddress`, `temporaryaddress`, `basicpay`, `hra`, `da`, `others`, `year`) VALUES (?,?,?,?,?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name, $panno, $mobile, $permanentaddress, $temporaryaddress, $basicpay, $hra, $da, $others, $year));
            Database::disconnect();
         
        }header("Location: f.html");
    } 
?>



<html>
<head>
</head>
<body>
<form action="create.php" method="post">
 <input type="text" name="name" class="form-control" placeholder="name" ></br>
 <input type="text" name="panno" class="form-control" placeholder="panno"  ></br>
 <input type="text" name="mobile" class="form-control"  placeholder="mobile"></br>
 <input type="text" name="permanentaddress" class="form-control" placeholder="permanentaddress" ></br>
 <input type="text" name="temporaryaddress" class="form-control" placeholder="temporaryaddress" ></br>
 <input type="text" name="basicpay" class="form-control" placeholder="basicpay"></br>
 <input type="text" name="hra" class="form-control" placeholder="hra"></br>
 <input type="text" name="da" class="form-control" placeholder="da"></br>
 <input type="text" name="others" class="form-control" placeholder="other" ></br>
 <input type="text" name="year" class="form-control" placeholder="year"></br>
<input type="submit" class="btn btn-primary" value="Submit">
</form>
</body>

</html>
