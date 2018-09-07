<?php
session_start();
include("connection.php");

if(isset($_POST['login']))
{
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$phone=mysqli_real_escape_string($con,$_POST['phone']);
	$select_user="Select * from bbaentrydata where fname='$fname' AND lname='$lname' AND phone='$phone'";
	$result=mysqli_query($con,$select_user);
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['fname']=$fname;
		$_SESSION['phone']=$phone;
		header("location: bba.php");
	}
		
	else{header("location: bbalogin.php");
		echo"<script>alert('Your name  and Password did not match')</script>";
		
		
	}
	}



?>