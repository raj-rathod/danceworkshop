<?php
   include('../action.php');
   if (!isset($_SESSION['name'])) {
       header('location:../index.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Form</title>

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
                        <h2 class="form-title">WorkShop Detail</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="wname" id="name" placeholder="WorkShop Name" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="venue" id="name" placeholder="Venue " required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fees" id="date" placeholder="Entry Fees"required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="desc" id="date" placeholder="Description"required/>
                        </div>
                        <div class="form-group">
                           <h3 class="form-input" style="opacity: 0.35;"> WorkShop Date : <input type="date" name="date" required/></h3> 
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="time" id="email" placeholder=" Workshop Timming "required/>
                        </div>
                        <div class="form-group">
                        <input type="submit" name="workshop" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>