<?php
	session_start();
	include("connection.php");
		$phone=$_SESSION["phone"];
						$get_user="select * from bbaentrydata where phone='$phone'";
						$run_user=mysqli_query($con,$get_user);
						$row=mysqli_fetch_assoc($run_user);
						$user_fname=$row['fname'];
						$user_lname=$row['lname'];
						$user_email=$row['email'];
						$fullname=$user_fname." ".$user_lname;

									
		if(isset($_SESSION["phone"])){
		
		
		?>
		
		<!DOCTYPE html>
<html>
	<head>
		<title>BBA syllabus</title>
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
							<form name="courseselect" method="POST" action="">
								<table>
									<tr>
										<td>
										Please select the semester</td>
										<td>
												<select name="course" border-radius:8px;">
													<option value="1">1st Semester</option>
													<option value="2">2nd Semester</option>
													<option value="3">3rd Semester</option>
													<option value="4">4th Semester</option>
													<option value="5">5th Semester</option>
													<option value="6">6th Semester</option>
													<option value="7">7th Semester</option>
													<option value="8">8th Semester</option>
												</select>
											</td>
										</tr>
										<tr><td><input type="submit" value="Submit" name="submit" class="btn btn-success"style="margin-left:220px;"/>
											</td></tr>
										</table>
										<?php
										
										if(isset($_POST["submit"]))
										{
												$course=$_POST['course'];
													switch($course)
													
													{

													
														case "1":
														echo "<center><img src='bba1.jpg' height='300px' width='700px' alt='bba1'/></center>";
														break;

														case "2":
														echo "<center><img src='bba2.jpg' height='300px' width='700px' alt='bba2'/></center>";
														break;

														case "3":
														echo "<center><img src='bba3.jpg' height='300px' width='700px' alt='bba3'/></center>";
														break;

														case "4":
														echo "<center><img src='bba4.jpg' height='300px' width='700px' alt='bba4'/></center>";
														break;

														case "5":
														echo "<center><img src='bba5.jpg' height='300px' width='700px' alt='bba5'/></center>";
														break;

														case "6":
														echo "<center><img src='bba6.jpg' height='300px' width='700px' alt='bba6'/></center>";
														break;

														case "7":
														echo "<center><img src='bba7.jpg' height='300px' width='700px' alt='bba7'/></center>";
														break;

														case "8":
														echo "<center><img src='bba8.jpg' height='300px' width='700px' alt='bba8'/></center>";
														break;
													}
												}?>
									</form>

									<?php

									}?>

								