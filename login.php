<?php

require './includes/common.php';

if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>

<!DOCTYPE html>
<!--This is the login page-->
<html>
    <head>
        <title>Login Page</title>
        
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <div>
                                <form method="POST" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                    
                                    <button class="btn btn-primary">Login</button>
                                    <?php
                                     if(isset($_GET["error"]))
                                     {
                                     echo $_GET['error'];
                                     }
                                     ?>
                                </form>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account?<strong><span style="color:blue;"> <a href="signup.php">Register</a></span></strong></p>
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

