<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="desig.css">

    <style>
      .demo-long {
        margin-top: 100px;
        margin-bottom: 200px;
      }
    </style>
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        </div>   
        <div class="navbar-collapse collapse">
	
          <ul class="nav navbar-nav">
<li>		  <a class="navbar-brand" href="#"><img src="demo/gt.png" alt="Logo" width= "200px" height= "30px"></a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
			 <li><a href="products.php">Products</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Client <b class="caret"></b></a>
              <ul class="dropdown-menu">
			  <li class="dropdown-header">Client</li>
                <li><a href="leads_form.php">LEADS</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Client</li>
                <li><a href="#">PROSPECT</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
	
	
	
	<div class = "col-md-3">
	<div id="frm1">
	
		<form method="POST" action="products_process.php" enctype="multipart/form-data" id="marg">
				Product Name:<br><input type="text" name="product_name" id="product_name" placeholder="Product Name" required >
			
			<br>	Manufacturer:<br><input type="text" name="manufacturer" id="manufacturer" placeholder="manufacturer" required>
			
			<br>	Quantity:<br><input type="text" name="quantity" id="quantity" placeholder="quantity" required>
			
				<br>Start Date:<br><input type="date" name="start_date" id="start_date" placeholder="start_date" required>
			
				<br>End Date:<br><input type="date" name="end_date" id="end_date" placeholder="end_date" required>
			
				<br>Vat:<br><input type="text" name="vat" id="vat" placeholder="vat" required><br>
		
				<br><input type="file" name="image">
			
				<br><textarea id="text" cols="27" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
			
				<br><br><button type="submit" name="upload" id="butt" >POST</button>
			
		</form>
		</div>
		<div class = "col-md-9"></div>
		
	</div>	
	
   

   

   

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="../src/jquery.bootstrap-autohidingnavbar.js"></script>

    <script>
      $("div.navbar-fixed-top").autoHidingNavbar();
    </script>
	</body>
	</html>