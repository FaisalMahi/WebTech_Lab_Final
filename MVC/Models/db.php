<?php

  function con()
  {
  	$serverName="localhost";
  	$userName="root";
  	$pass="";
  	$dbName="online_shop";
  	$conn=new mysqli($serverName,$userName,$pass,$dbName);
  	return $conn;
  }

?>