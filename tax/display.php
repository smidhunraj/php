<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
 
<body>

<form method = "post" action="display.php">
 <select name="year">
  <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
</select> 
 <input type="submit"  name="submit" value="submit">
</form>




    <div class="container">
            <div class="row">
      
            </div>
            <div class="row">
              
                <table border="2" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          
<th>panno</th>
<th>mobile</th>
<th>permanentaddress</th>
<th>temporaryaddress</th>
<th>basicpay</th>
<th>hra</th>
<th>da</th>
<th>others</th>
<th>total amount</th>
<th>years</th>
<th>Image</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'database.php';
                       $pdo = Database::connect();
                     //  $sql = 'SELECT * FROM income_tax where year=1998;';


if(isset($_POST["submit"])){

$year=$_POST['year'];
}
// select a particular user by id
$stmt = $pdo->prepare("SELECT * FROM income_tax where year=?");
$stmt->execute(array($year)); 








                       foreach ( $stmt->fetchAll() as $row) {
                                echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'.$row['panno'].'</td>';
 echo '<td>'.$row['mobile'].'</td>';
 echo '<td>'.$row['permanentaddress'].'</td>';
 echo '<td>'.$row['temporaryaddress'].'</td>';
 echo '<td>'.$row['basicpay'].'</td>';
 echo '<td>'.$row['hra'].'</td>';

 echo '<td>'.$row['da'].'</td>';
 echo '<td>'.$row['others'].'</td>';
$total=$row['basicpay']+0.2*$row['hra']+0.1*$row['da']+0.01*$row['others'];
echo '<td>'.$total.'</td>';
 echo '<td>'.$row['year'].'</td>';
 echo '<td><img src="'.$row['file'].'"width="20" height="20"/></td>';

                                echo '</tr>';
                       }
                       Database::disconnect();
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>
