<?php
if(isset($_POST['submit']))
{
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
						$fullname=$user_fname." ".$user_lname;
				
				 if(($gpa>=3.00)&&($gpa<3.20))
				{
					$percentage=10;
					//echo $percentage;

				}
				else if(($gpa>=3.20)&&($gpa<3.50))
				{
					$percentage=20;
					//echo $percentage;

				}
					else if(($gpa>=3.50)&&($gpa<3.70))
				{
					$percentage=50;
					//echo $percentage;

				}
					else if(($gpa>=3.70)&&($gpa<3.90))
				{
					$percentage=75;
					//echo $percentage;

				}
				else if(($gpa>=3.90)&&($gpa<=4.00))
				{
					$percentage=100;
					//echo $percentage;

				}
				else{
					$percentage=0;
					//echo $percentage;
				}
		if(isset($_SESSION["phone"]))
			{		
?>

						
						
	<!DOCTYPE html>
<html>
	<head>
	<title>Scholarship|BBA</title>
		<link rel="stylesheet" href="style.css" >
		<style>
		#header ul li {
		margin-top:40px;
		list-style:none;
		text-decoration:none;
		float:left;
		padding-left:50px;}
		
		a	{
			text-decoration:none;
			color:#C0C0C0; 
			}
		a:hover 
		{
		 color:	#000000;
		 text-decoration:none; 
		 cursor:pointer;  
		}
		</style>
	</head>
	<body>
			<div class="container">
			
					<div id="header_wrapper">
							<div id="header">
							
							<ul><li><a href="feestructurebba.php">Fee Structure</a></li>
							<li><a href="bbaannouncement.php">Announcements</a></li>
							<li><a href="scholarshipcalculatorbba.php">Scholarship Calculator</a></li>
								<li><a href="coursebba.php">Courses</a></li>
							<li><a href="logout.php">Logout</a></li></ul>
						</div>
					</div>
						<div class="content">
				
					<div id="admission">
								
						<table border="0" width="1200px">
						<tr><th colspan="2">Fee Structure with Scholarship with <?php echo $gpa." GPA";?><th></tr>
						<tr>
							<td>Name: <?php echo $fullname;?></td>
							<td>Desired Program: <?php echo "BBA";?></td>
							</tr>
							
							<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							</tr></table>
							<table border="1" width="1200px" height="280px">
														<tr>
							<th bgcolor="#ff0000">Details</th>
							<th bgcolor="#ff0000">Amount</th>
							</tr>
							<?php
												
						
													
											
										
														include("connection.php");
														$select="select* from feeadmin where faculty='BBA'";
														$run_fee=mysqli_query($con,$select);
														$fee=mysqli_fetch_array($run_fee);
														
														$admission=$fee['Admission'];
														$second=$fee['second'];
														$third=$fee['third'];
														$per=$fee['per'];
														$total=$fee['total'];
														$rule1=$fee['rule1'];
														$rule2=$fee['rule2'];
														$rule3=$fee['rule3'];
														$rule4=$fee['rule4'];
														$rule5=$fee['rule5'];
														$admissiondiscount=($admission-(($percentage/100)*$admission));
														$discounted=($admissiondiscount+$second+$third)+($per*7);

														
														
												
														echo "<tr><th>Admission fee</td><th>Nrs ".$admissiondiscount." ( ".$percentage."%"." Discounted )</th></tr>";
														
														echo "<tr><th>Second Installment</th><th>Nrs ".$second."</th></tr>";
														echo "<tr><th>Third Installment</th><th>Nrs ".$third."</th></tr>";
														
														echo "<tr><th>Per Semester Cost</th><th>Nrs ".$per."</th></tr>";
														echo "<tr><th>Total Semester Cost</th><th>Nrs ".$discounted."</th></tr></table>";
														echo"<table>
														<tr>
														<td>Rules:</td></tr>";
														echo"<tr>
														<td>&nbsp;</td></tr>";
														echo"<tr>
														<td>".$rule1."</td></tr>";
														echo"<tr>
														<td>".$rule2."</td></tr>";
														echo"<tr>
														<td>".$rule3."</td></tr>";
														echo"<tr>
														<td>".$rule4."</td></tr>";
														echo"<tr>
														<td>".$rule5."</td></tr>";

														

													}
													
												}
												else{
													header("location:scholarshipcalculatorbba.php");
												}

														?>
		
		
