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
		<title>BIM syllabus</title>
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
							
							<ul><li><a href="feestructurebim.php">Fee Structure</a></li>
							<li><a href="bimannouncement.php">Announcements</a></li>
							<li><a href="scholarshipcalculatorbim.php">Scholarship Calculator</a></li>
							<li><a href="coursebim.php">Courses</a></li>

							<li><a href="logout.php">Logout</a></li></ul>
						</div>
							</div>
							<form name="courseselect" method="POST" action="">
								<table>
									<tr>
										<td>
										Please select the semester</td>
										<td>
												<select name="course"border-radius:8px;">
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
														echo "<center><img src='bim1.jpg' height='300px' width='700px' alt='bim1'/></center>";
														break;

														case "2":
														echo "<center><img src='bim2.jpg' height='300px' width='700px' alt='bim2'/></center>";
														break;

														case "3":
														echo "<center><img src='bim3.jpg' height='300px' width='700px' alt='bim3'/></center>";
														break;

														case "4":
														echo "<center><img src='bim4.jpg' height='300px' width='700px' alt='bim4'/></center>";
														break;

														case "5":
														echo "<center><img src='bim5.jpg' height='300px' width='700px' alt='bim5'/></center>";
														break;

														case "6":
														echo "<center><img src='bim6.jpg' height='300px' width='700px' alt='bim6'/></center>";
														break;

														case "7":
														echo "<center><img src='bim7.jpg' height='300px' width='700px' alt='bim7'/></center>";
														break;

														case "8":
														echo "<center><img src='bim8.jpg' height='300px' width='700px' alt='bim8'/></center>";
														echo "<center><img src='bimelective.jpg' height='300px' width='700px' alt='bim8electives'/></center>";
														break;
													}
												}?>
									</form>
									<?php
									

									}?>