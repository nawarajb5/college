

<html>
	
	<body>
			<form action="details.php" method="get"> 
			<table>
				<input type="hidden" name="name" value="<?php echo $_GET['name'];?>"/>
				<input type="hidden" name="address" value="<?php echo $_GET['address'];?>"/>
				<input type="hidden" name="marks" value="<?php echo$_GET['marks'];?>"/>
				<tr>
				<td><select name="faculty"style="font-family:Comic Sans MS;color: #EF0037;margin-top:15px;font-weight:bolder;border-radius:8px;">
													<option value="">Select faculty</option>
													<option value="BIM">BIM</option>
													<option value="BBA">BBA</option>

												</select></td>
												<tr>
					<td><input type="submit" name="submit"/><td>
				</tr>
				
			</table>
			</form>
	</body>
</html>
9860251274