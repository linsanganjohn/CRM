
<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$rowuser = $username;
$rowpass = $password;

mysql_connect("localhost","root","");
mysql_select_db("crm");
if (isset($_POST['btn'])) {
 $result = mysql_query("Select * from user where username='$username' and password ='$password'")
		or die("Fail to Query database" .mysql_error());

$row = mysql_fetch_array($result);


if ($row['username'] == $rowuser && $row['password'] == $rowpass){

	?>
			<script> alert('Welcome <?php  echo $row['username']; ?>'); </script>
			<script>window.location='admin_index.php';</script>
		<!-- echo "script type = 'text/javascript'> alert('Submitted succesfully!') </script>" .$row['username'];	
		header('Location: index.php'); -->
	<?php

}
else{
	?>
		<script> alert('Failed to log in'); </script>
			<script>window.location='login1.php';</script>
<?php
	//echo "<script type='text/javascript'>alert<'Failed to Submit!')</script>";
}
}

?>