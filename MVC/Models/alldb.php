<?php
require_once('db.php');
  
function cauth($id,$pass)
{
	$conn=con();
	$sql="select * from customer where CID='$id' and CPass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function aauth($id,$pass)
{
	$conn=con();
	$sq2="select * from admin where AID='$id' and APass='$pass'";
	$res=mysqli_query($conn,$sq2);
	return $res;
}

function data()
{
	$conn=con();
	$sql1="select * from product";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}
function data1()
{
	$conn=con();
	$sql1="select * from customer";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}


?>