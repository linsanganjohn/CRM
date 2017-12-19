<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<link rel="stylesheet" type="text/css" href="design.css">
<body>
	
	<div id="frm">
		<div id="frm_fill">
			<form  action="lead_process.php" method="POST" >
				<i><h1>Sales Leads Form</h1></i>
				<i><h2>Please enter your information below so we be in touch.</h2></i>
					
					<br>COMPANY NAME<br> <input type="text" name="fname" id="fname" placeholder="Company Name" required>
					<br>LEAD ADDRESS<br> <input type="text" name="leadaddress" id="leadaddress" placeholder="Address" required>
					<br>TIN ID<br>	<input type="text" name="tin" id="tin" placeholder="Tin ID" required>
					<br>Contact Person<br> <input type="text" name="cperson" id="cperson" placeholder="Contact Name" required>
					<br>Contact No<br> <input type="text" maxlength="10" name="contactnum" id="contactnum" placeholder="Contact No" require>
			
					
					<br>Email<br><input type="email" name="email" id="email" placeholder="Email" required><br>
					<?php
					$hostname = "localhost";
					$username = "root";
					$password = "";
					$databaseName = "crm";

					$connect = mysqli_connect($hostname, $username, $password, $databaseName);

					$query = "SELECT * FROM user";

					$result1 = mysqli_query($connect, $query);

					?>

					<br>Assigned To:<select name="assign" id="assign" width="10%;;" >
						<option value="" disabled selected>Assigned Personel</option>
						 <?php while ($row1 = mysqli_fetch_array($result1)):;?> 
						 <option ><?php echo $row1[3];?></option>
  						<?php endwhile;?>

					</select>
					<br><br>
				<input type="submit" value="Create">
			
			 </form>
		 </div>
	</div>
</body>
</html>