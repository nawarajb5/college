<?php
if(isset($_POST['submit']))
{
$faculty=$_POST['faculty'];
$admission=$_POST['admission'];
$second=$_POST['second'];
$third=$_POST['third'];
$per=$_POST['per'];
$total=($per*7)+$admission+$second+$third;
$rule2=$_POST['rule2'];
$rule3=$_POST['rule3'];
$rule4=$_POST['rule4'];
$rule5=$_POST['rule5'];
$rule1=$_POST['rule1'];
$con=mysqli_connect("localhost","root","","software")or die("Connection Failed");

$insert="insert into feeadmin(faculty,Admission,second,third,per,total,rule1,rule2,rule3,rule4,rule5)values
			('$faculty','$admission','$second','$third','$per','$total','$rule1','$rule2','$rule3','$rule4','$rule5')";
			mysqli_query($con,$insert) or die("Error in inserting");
}







?>




<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
				<link rel="stylesheet" href="style.css" >
		<style>
		#header ul li {
		margin-top:40px;
		list-style:none;
		text-decoration:none;
		float:left;
		padding-left: 36px;
		}
		
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
							
						
							
							<ul><li><a href="Fee Structure">Fee Structure</a></li>
							<li><a href="Scholarship">Scholarship</a></li>
							<li><a href="routineadmin.php"> Announcement</a></li>
							
							<li><a href="userdetail.php"</a>Scholarship</li>
							<li><a href="logout.php">Test</a></li>
							<li><a href="logout.php">Others</a></li></ul>
							
							</div>
							</div>


												<form name="fee"method="post"action="" id="routine">
											<table><tr><td>
												<select name="faculty"style="font-family:Comic Sans MS;color: #EF0037;margin-top:15px;font-weight:bolder;border-radius:8px;">
													<option value="">Select Faculty</option>
													<option value="BBA">BBA</option>
													<option value="BIM">BIM</option>
												</select>
											</td></tr>
											<tr><td>Admission Fees</td>
												<td><input type="text" name="admission" required="required">
												</td>
											</tr>
											<tr><td>Second Installation</td>
												<td><input type="text" name="second" required="required">
												</td>
											</tr>
											<tr><td>Third Installation</td>
												<td><input type="text" name="third" required="required">
												</td>
											</tr>
											<tr><td>Per Semester  Cost</td>
												<td><input type="text" name="per" required="required">
												</td>
											</tr>

												
												
												</td>
											</tr>
											<tr>
												<td>
													<textarea  name="rule1" cols="60" rows="20"style="border-radius:2%;">
														
													</textarea></td>
												</tr>
												<tr>
												<td>
													<textarea  name="rule2" cols="50" rows="10"style="border-radius:2%;">
														
													</textarea></td>
												</tr>
												<tr>
												<td>
													<textarea  name="rule3" cols="60" rows="20"style="border-radius:2%;">
													</textarea></td>
												</tr>
												<tr>
												<td>
													<textarea  name="rule4" cols="60" rows="20"style="border-radius:2%;" placeholder="Rule 4 here">
														
													</textarea></td>
												</tr>
												<tr>
												<td>
													<textarea  name="rule5" cols="60" rows="20"style="border-radius:2%;" placeholder="Rule 5 here">
														
													</textarea></td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="submit" name="submit"value="Submit">
												</td>
											</tr>
													

											
											</table>
										</form>