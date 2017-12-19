<?php

$host="localhost";
$username="root";
$password="";
$db_name="crm";
$tbl_name="user";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");



$username=$_POST['name'];
$password=$_POST['pass'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$contact_no=$_POST['cnum'];

$sql="insert into user (username,password,firstname,lastname,contact_no) VALUES ('$username','$password','$firstname','$lastname','$contact_no')";
$result=mysql_query($sql);

if($result==$result){
?>

	<script> alert('Inserted succesfully'); </script>
	
	<script>window.location='login1.php';</script>
	<?php

}
else{
	echo "ERROR";
}
?>
<?php
mysql_close()
?>