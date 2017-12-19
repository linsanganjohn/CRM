<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="design.css">
</head>
<body>
<div id="content">
	<div id="frm1">
		<form method="POST" action="products_process.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">
			
			<div>
				Product Name:<input type="text" name="product_name" id="product_name" placeholder="product_name" required>
			</div>
			<div>
				Manufacturer:<input type="text" name="manufacturer" id="manufacturer" placeholder="manufacturer" required>
			</div>
			<div>
				Quantity:<input type="text" name="quantity" id="quantity" placeholder="quantity" required>
			</div>
			<div>
				Start Date:<input type="date" name="start_date" id="start_date" placeholder="start_date" required>
			</div>
			<div>
				End Date:<input type="date" name="end_date" id="end_date" placeholder="end_date" required>
			</div>
			<div>
				Vat:<input type="text" name="vat" id="vat" placeholder="vat" required>
			</div>
			<div>
				<input type="file" name="image">
			</div>
			
			<div>
				<textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
			</div>
			<div>
				<button type="submit" name="upload">POST</button>
			</div>
		</form>
	</div>	
	
</div>
</body>
</html>