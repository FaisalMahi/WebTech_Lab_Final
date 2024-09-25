<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>

    <h1 style="text-align: center;">Login Page</h1>


    <form method="post" action="../Controllers/logCheckController.php">
    Id  : <input type="text" name="id" ><br><br>
   	Pass : <input type="text" name="pass"><br>
   		 <?php
   		 if(isset($_SESSION['Error']))
   		 {
              echo $_SESSION['Error'];
   		    unset($_SESSION['Error']);
   		 }

   		  
   		 ?>
         </div>
         <br>
         
    	<button name="btn">Login</button>
        
   </form>
</body>
</html>