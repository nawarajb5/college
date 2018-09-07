
<?php
	session_start();
	include("connection.php");
		$phone=$_SESSION["phone"];
						$get_user="select * from bimentrydata where phone='$phone'";
						$run_user=mysqli_query($con,$get_user);
						$row=mysqli_fetch_assoc($run_user);
						$user_fname=$row['fname'];
						$user_lname=$row['lname'];
						$user_email=$row['email'];


						
						
	if(isset($_SESSION["phone"])){
		
		
		?>



<!DOCTYPE html>
<html>
	<head>
	<title>Announcement|BIM</title>
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
						<center><table border="0"><tr ><td bgcolor="#ef046f" height="100"colspan="2" width="900px"><center  style="font-family:Arial;font-size:40px;">Announcement</center></td></tr></table></br></br></br>
									<?php
					$get_notice="select * from announcement where faculty='bim'ORDER BY sno DESC";
						$run_notice=mysqli_query($con,$get_notice);
						
						while($row=mysqli_fetch_assoc($run_notice))
						{
						$user_sno=$row['sno'];
						$user_faculty=$row['faculty'];
						$user_topic=$row['topic'];
						$user_notice=$row['notice'];
						$user_date=$row['date'];     //notice fetch garya
						?>
							
					
					
					<table border="0" width="1000px"><tr ><td bgcolor="#efefef" height="200"colspan="2" width="900px">
						<center><strong style="font-family:Arial;font-size:30px;"><?php echo $user_topic;?></strong></center></br>
						<p style="float:left;font-family:Arial;"><?php echo "Dear "." ".$user_faculty." "."applying Students ,";?></p></br>
						</br><?php echo $user_notice;?><strong><p  style="float:right;"><?php echo "Date".":"." ".$user_date;?></p></strong></td></tr>
			
								
					
					</table>
					</br></br>
					<?php
					}
				}
					?>
				</div>
			</body>