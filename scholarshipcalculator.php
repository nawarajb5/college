
<?php
	session_start();
	include("connection.php");
		$phone=$_SESSION["phone"];
		$gpa=$_POST['gpa'];
						$get_user="select * from bbaentrydata where phone='$phone'";
						$run_user=mysqli_query($con,$get_user);
						$row=mysqli_fetch_assoc($run_user);
						$user_fname=$row['fname'];
						$user_lname=$row['lname'];
						$user_email=$row['email'];
				
				 if(($gpa>=3.00)&&($gpa<3.20))
				{
					$percentage=10;
					echo $percentage;

				}
				else if(($gpa>=3.20)&&($gpa<3.50))
				{
					$percentage=20;
					echo $percentage;

				}
					else if(($gpa>=3.50)&&($gpa<3.70))
				{
					$percentage=50;
					echo $percentage;

				}
					else if(($gpa>=3.70)&&($gpa<3.90))
				{
					$percentage=75;
					echo $percentage;

				}
				else if(($gpa>=3.90)&&($gpa<=4.00))
				{
					$percentage=100;
					echo $percentage;

				}
				else{
					echo"NO SCHOLARSHIP AVAILABLE TO YOU";
				}


						
						
	if(isset($_SESSION["phone"])){
		
		
		?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" >
<style>

	.submit{
		color:#fff;
padding:7px 22px;
border:none;
outline:none;
font-size:20px;
text-shadow:-2px 2px 0 rgba(0,0,0,0.2);
font-weight:700;
transition:all .1s linear;
background:linear-gradient(to bottom,#977d60,#685642);
box-shadow:-1px 0 1px #584938,0 1px 1px #584938,-2px 1px 1px #584938,-1px 2px 1px #584938,-3px 2px 1px #584938,-2px 3px 1px #584938,-4px 3px 1px #584938,-3px 4px 1px #493c2e,-5px 4px 1px #493c2e,-4px 5px 1px #493c2e,-6px 5px 1px #493c2e;
 text-align:center;

	}
	.formdivcolor
	{
		 background : rgba(0,0,0,.1);
		 margin-left:40%;
		 width:420px;
		 height: 480px;
		 float-left:220px;
		 border-radius: 15px;
		 text-align:left;padding-top:40px;

	}
 input[type="text"] 
	{
		width:300px;
		height:23px;
		margin-top: :19px;
		border-radius: 20px;
	{
</style>

<title>BBA|Login</title>
</head>
<body>
	<div class="formdivcolor">
	<form name="scholarshipcalculator"method="post" action="">
		<table align="center">
			<tr>
				<th colspan="2">Scholarship calculator</th>
				
			</tr>
			<tr>
				<td>Enter GPA here</td>
				<td><input type="text" name="gpa" required="required" /></td>
			</tr>
				<tr>
				<td colspan="2"><center><input type="submit" class="submit" name="submit" value="submit"></center>
				</td>
			</tr>
			<tr>
				<td>
			Signup form</td><td><a href="bbadataform.php"> Click here</a></td>
				
			</tr>
			
		</table>
	</form>
</div>
<?php
}?>


			</body>	
			</html>	