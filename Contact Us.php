<?php

require './includes/common.php';

?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>Lifestylestore |Contact Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
         <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style_sheet.css"> 
    </head>
    <body>
        <?php 
			include 'includes/header.php'; 
		?>
        
        <div class="container"><br><br><br><br>
			<div class="row">
				<div class="col-sm-10">
				  <h1>LIVE SUPPORT</h1>
				  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
				  <div>
					 <p class = "text-justify">This a 24/7 live support for you. If you face an kind of difficulties any where during your shopping experience please allow us to resolve that issue for you maybe it be unable to add to cart or confirming your order. I hope this will you will get best shopping experience here. We are always happy to assist you.Thank you! </p>
				  </div>
				</div>
				<div class="col-sm-2">
				 <img align="right" src="Images/contact.png" alt="Contact us">
				</div>
			</div><br>
    

			<div class="row">
				<div class="col-sm-8">
					<h2>CONTACT US</h2>
					<form>		
						<div class="form-group">
							<input type="text" name="name" class="form-control" required="required" placeholder="Name" >
						</div>
						
						<div class="form-group">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email">
						</div>
						
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Your Message Here"></textarea>
						</div>
								
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					</form>
				</div>
							
				<div class="col-sm-4">
				   <h2>Contact Information:</h2>
					<p>New Delhi,Delhi</p>
					<p>India</p>
					<p>Phone:+91 90000 00000</p>
					<p>Email: info@lifestylestore.com</p>
					<p>Follow on: Facebook, Twitter</p>		
				</div>
			</div>
		</div>
      <?php

       include './includes/footer.php';

      ?>
        
    </body>
</html>


