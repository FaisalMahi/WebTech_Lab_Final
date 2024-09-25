<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
$res=data1();
?>

<!DOCTYPE html>
<html>
<head>
  
  <title >Admin</title>
</head>
<body>
  
    <h1 align="center" style="border: 3px solid Red;
      padding: 20px; background-color: white;">Admin Page</h1>

    <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>

    </form>


   welcome, your Admin is ID : <?php echo $_SESSION['id'];?>
<br>


<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1" align="center">
      <tr>
        <th>CustomerID</th>
         <th>CustomerName</th>
          <th>PASS</th>
          <th>Email</th>
      </tr>
<?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['CID']; ?></td>
        <td><?php echo $r['CName']; ?></td>
        <td><?php echo $r['CPass']; ?></td>
        <td><?php echo $r['Email']; ?></td>

        
      </tr>
 <?php } ?>
    </table>
   </form> 

  
   
</body>
</html>