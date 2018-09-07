	<?php
	if(isset($_POST['register']))
	{
		$notice = $_POST['notice'];
		$faculty = $_POST['faculty'];
		$topic= $_POST['ntopic'];
		$date=date("F d Y ",time());
		
		
		$con=mysqli_connect("localhost","root","","software")or die("Connection Failed"); //database name is software
		$createtable="create table announcement(faculty varchar(20),topic varchar(20),notice varchar(20),date varchar(15))";
mysqli_query($con,$createtable);
		$insert="insert into announcement(faculty,topic,notice,date)
		values('$faculty','$topic','$notice','$date')"or die('insertion error');
		
		$run=mysqli_query($con,$insert); 
		if($run)
		{
			echo"<script>alert('Posted Sucessfully')</script>";
			
		}
	}
			
?>
		
		<!DOCTYPE html>
<html>
	<head>
		<title>Announcement Admin</title>
				<link rel="stylesheet" href="style.css" >
		<style>
		#header ul li {
		margin-top:40px;
		list-style:none;
		text-decoration:none;
		float:left;
		padding-left:100px;}
		
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
							
						
							
							<ul><li><a href="feestructureadmin.php">Fee Structure</a></li>
							<li><a href="announcementadmin.php"> Announcement</a></li>
							
						</ul>
							
							</div>
							</div>
												<form name="notice"method="post"action=" " >
											<table><tr>
												<td>Select Faculty</td>
												<td>
												<select name="faculty"style="font-family:Comic Sans MS;color: #EF0037;margin-top:15px;font-weight:bolder;border-radius:8px;">
													
													<option value="bba">BBA</option>
													<option value="bim">BIM</option>
													

												</select>
											</td></tr>
											<tr><td>
												<textarea rows="2" cols="20" placeholder="Enter topic here " name="ntopic"></textarea>
											</td></tr>
											<tr><td>
												<textarea rows="7" cols="50" placeholder="Enter notice here"name="notice"></textarea>
											</td></tr>
											<tr>
											<td><center><input type="submit" value="Submit" name="register" class="btn btn-success"style="margin-left:220px;"/></center>
											</td>
										</tr></table>
										<?php echo date('l');?>
										</form>