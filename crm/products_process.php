<?php
	$db = mysqli_connect("localhost", "root", "", "crm");
	$msg = "";

	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']);


		$image = $_FILES['image']['name'];
		$product_name = mysqli_real_escape_string($db, $_POST['product_name']);
		$manufacturer = mysqli_real_escape_string($db, $_POST['manufacturer']);
		$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
		$start_date = mysqli_real_escape_string($db, $_POST['start_date']);
		$end_date = mysqli_real_escape_string($db, $_POST['end_date']);
		$vat = mysqli_real_escape_string($db, $_POST['vat']);
		$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

		$sql = "INSERT INTO products (product_name, manufacturer,quantity,start_date,end_date,vat,image,image_text) VALUES ('$product_name', '$manufacturer', '$quantity', '$start_date', '$end_date', '$vat', '$image', '$image_text')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Inserted successfully";
		}else{
			$msg = "Failed to Insert";
		}
	}

	$result = mysqli_query($db, "SELECT * FROM products");
	
	while ($row = mysqli_fetch_array($result)) {
		echo "<div id='img_div'>";
			
			echo "<p>".$row['product_name']."</p>";
			echo "<p>".$row['manufacturer']."</p>";
			echo "<p>".$row['quantity']."</p>";
			echo "<p>".$row['start_date']."</p>";
			echo "<p>".$row['end_date']."</p>";
			echo "<p>".$row['vat']."</p>";
			echo "<p>".$row['image_text']."</p>";
			echo "<img src='images/".$row['image']."' >";
		echo "</div>";
	}
?>
