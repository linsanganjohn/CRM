<?php

$host="localhost";
$username="root";
$password="";
$db_name="crm";
$tbl_name="leads";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");



$fname=$_POST['fname'];
$tin=$_POST['tin'];
$ladd=$_POST['leadaddress'];
$cnum=$_POST['contactnum'];
$email=$_POST['email'];
$assign=$_POST['assign'];

$sql="insert into leads (fname,tin,address,contact,email,assigned_to) VALUES ('$fname','$tin','$ladd','$cnum','$email','$assign')";
$result=mysql_query($sql);
if($result==$result){
?>
	<script> alert('Inserted succesfully'); </script>
	
	<script>window.location='admin_index.php';</script>
	<?php

}
else{
	echo "ERROR";
}
?>
<?php
mysql_close()
?>