<?php

require './includes/common.php';

if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>

<!DOCTYPE html>
<!--This is the signup page-->
<html>
    <head>
        <title>Sign Up Page</title>
        
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
        
        <div class="container">
            <div class="row">
                
                <div class="col-xs-5 col-xs-offset-3">
                    <div class="panel panel-default " style="border:0; margin-top:20%;">

                        <div class="panel-body">
                            <h2 style="font-weight: bold">SIGN UP</h2>
                            <form method="POST" action="signup_script.php">
                                     <div class="form-group">
                                         <input type="text" placeholder="Name" name="name" class="form-control" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" name="email" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        <?php
                                          if(isset($_GET["m1"]))
                                          {
                                          echo $_GET['m1'];
                                          }
                                        ?>  
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" name="password" class="form-control" required="true" pattern=".{6,}">
                                    </div>
                                     <div class="form-group">
                                        <input type="number" placeholder="Contact" name="contact" class="form-control" required="true" maxlength="10" size="10">
                                        <?php
                                         if(isset($_GET["m2"]))
                                         {
                                           echo $_GET['m2'];
                                         }
                                        ?>
                                    </div>
                                     <div class="form-group">
                                        <input type="text" placeholder="City" name="city" class="form-control" required="true">
                                    </div>
                                     <div class="form-group">
                                        <input type="text" placeholder="Address" name="address" class="form-control" required="true">
                                    </div>
                                    
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                        
                            </form>
                        </div>
                    </div>
                </div>
              </div>
        </div>
       
        
<?php

include './includes/footer.php';

?>
    </body>
</html>

