<div id="frm1">
		<form method="POST" action="products_process.php" enctype="multipart/form-data">
				<p>Product Name:<p><input type="text" name="product_name" id="product_name" placeholder="Product Name" required style="width:300px">
			
				Manufacturer:<input type="text" name="manufacturer" id="manufacturer" placeholder="manufacturer" required>
			
				Quantity:<input type="text" name="quantity" id="quantity" placeholder="quantity" required>
			
				Start Date:<input type="date" name="start_date" id="start_date" placeholder="start_date" required>
			
				End Date:<input type="date" name="end_date" id="end_date" placeholder="end_date" required>
			
				Vat:<input type="text" name="vat" id="vat" placeholder="vat" required>
		
				<input type="file" name="image">
			
				<textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
			
				<button type="submit" name="upload">POST</button>
			
		</form>
	</div>	
	