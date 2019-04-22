<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main" >

        <section class="signup" >
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container" style="position:relative; bottom:80px;" >
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="regestire.php">
                        
                        <h2 class="form-title" style="position:relative; top:20px;">Service Broker</h2>
                        <h1 class="form-title" style="text-align:center;" >Your ID :</h1>
                      

                        <div class="form-group">
                        <h2 class="form-title" style="text-align:center; color:grey; " ><?php echo $_SESSION['id']; ?></h1>
                        <h5 class="form-title" style="text-align:center;" > Please Copy This Id and Store It in Your Database </h5>
                        <div class="form-group">
                            <input type="submit" name="back" id="submit" class="form-submit" value="Back.. "/>
                        </div>
                            
                        </div>


                    </form>
                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>