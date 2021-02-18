<?php

require './includes/common.php';

if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>


<!DOCTYPE html>
<!-- Index page of Website-->
<html>
    <head>
        <title>Lifestyle Store</title>
      
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
            include './includes/header.php';
        ?>
         
          
          <div id="banner_image">
              <div class="container">
                  <div id="banner_content">
                      <h1>We Sell Lifestyle.</h1>
                      <p>Flat 40% OFF on premium brands</p>
                      <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                  </div>
              </div>
          </div>
          <br>
          <div class="container">
                <div class="row" style="margin-bottom:5%;">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php" id="NoDecoration">
                        <img src="Images/7.jpg" alt="Watches">
                        <div class="caption" style="text-align: centre;">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands.</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="thumbnail">  
                    <a href="products.php" id="NoDecoration">
                        <img src="Images/1.jpg" alt="Cameras">
                        <div class="caption" style="text-align: centre;">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </a>
                  </div> 
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="products.php" id="NoDecoration">
                        <img src="Images/shirt.jpg" alt="Shirts">
                        <div class="caption" style="text-align: centre;">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </a>
                    </div>
                </div>
                </div>
        </div>
          
<?php

include './includes/footer.php';

?>
        
    </body>
</html>