<?php
   include('../action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">COACH SIGNUP</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Coach Name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="uname" id="name" placeholder="Username" required/>
                        </div>
                        <div class="form-group">
                             <h3 class="form-input" style="opacity: 0.35;">Male : &nbsp &nbsp&nbsp <input type="radio"  name="sex" id="date" value="Male" required/></h3>  
                             <h3 class="form-input" style="opacity: 0.35;">Female :  <input type="radio"  name="sex" id="date" value="Female" required/></h3>  
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email "required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="psw" id="password" placeholder="Password"required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="repsw" id="re_password" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="tsignup" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="tlogin.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>