<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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
                        <h1 class="form-title" style="text-align:center;" >Create Account</h1>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Admin Name :"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Admin Password :"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="system_name" id="system_name" placeholder="System Name :"/>
                 
                        </div>
                       <?php /* Here The Random Password Will Appear To The Admin After He/She Sign Up ^_^ */?>

                       <div class="form-group">
                            <input type="text" class="form-input" name="contact" id="contact" placeholder="Contact Number :"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="System Address :"/>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-input" name="r_password" id="password" placeholder="Your Random Password is :"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Regestir Your System "/>
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