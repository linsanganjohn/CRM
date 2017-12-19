<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<link rel="stylesheet" type="text/css" href="log.css">
<script src="log.js"></script>
<body>
	 <div class="container">
        <div class="card card-container">
			<div id="frm" class="form-signin">
				<form action="create_process.php" method="POST">
					<p>
						<label>Firstname:</label>
						<input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" required>
					</p>
					<p>
						<label>Lastname:</label>
						<input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control" required>
					</p>
					<p>
						<label>Contact No:</label>
						 <input type="text" name="cnum" id="cnum" placeholder="Contact No." class="form-control" required>
					</p>
					POSITION:<SELECT name="POSITION">
						<OPTION value=""></OPTION>
						<OPTION value="HR">HR</OPTION>
						<option value="SALES">SALES</option>
						<option value="ADMIN">ADMIN</option>
					</SELECT>
					<p>
						<label>Username:</label>
						<input type="text" name="name" id="name" placeholder="Username" class="form-control" required>
					</p>
					
					<p>
						<label>Password:</label>
						<input type="Password" name="pass"  placeholder="Password" id="pass" required>
					</p>
					<p> 
					<input type="submit" value="Create" name="create">
					</p>
				 </form>
			</div>
		</div>
	</div>	
</body>
</html>
  