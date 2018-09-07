<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$schooling=$_POST['schooling'];





		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		    echo "<script>alert('Invalid Email');</script>";
			echo '<script>window.location.href = "bimdataform.php";</script>';
		 
		}
	
	if(strlen($phone)!=10)
	{
		echo "<script>alert('Invalid number');</script>";
		echo '<script>window.location.href = "bimdataform.php";</script>';
		}
		
else{
$con=mysqli_connect("localhost","root","","software")or die("ERRor");
$createtable="create table bimaentrydata(fname varchar(20),lname varchar(20),schooling varchar(20),email varchar(20),phone varchar(15))";
mysqli_query($con,$createtable);
$insert="insert into bimentrydata(fname,lname,schooling,email,phone) values('$fname','$lname','$schooling','$email','$phone')";
$run=mysqli_query($con,$insert) or die("Phone or email already registered");

if($run)
		{
			echo"<script>alert('Your data is sucessfully uploaded.Now you can use your name and number to login')</script>";
			echo"<a href='bimlogin.php'>Click here to login</a>";
			
		}
}
}
?>
	