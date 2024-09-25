<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
$res=data();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Student</title>
</head>
<body>
  <h1 align="center" style="border: 3px solid blue;
      padding: 20px; background-color: white;" >Customer Page</h1>
  <h2 style="text-align: right; margin-right: 20px;color: red;"> welcome <?php echo $_SESSION['id'];?>
</h2>
<br>
<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1" align="center">
      <tr>
        <th>ProcutName</th>
         <th>Weight</th>
          <th>Code</th>
          <th>Price</th>
      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['PName']; ?></td>
        <td><?php echo $r['Weight']; ?></td>
        <td><?php echo $r['Code']; ?></td>
        <td><?php echo $r['Price']; ?></td>
        
      </tr>
 <?php } ?>
    </table>
   </form> 

  <form method="post" action="../Controllers/logCheckController.php">

    <button name="logout">Logout</button>
    
  </form>
   
</body>
</html>