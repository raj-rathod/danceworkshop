<?php
  session_start();
  if(!isset($_SESSION['cid'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Dance WorkShop</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/wed3.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Dance WorkShop</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="coach.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/home1.jpg);background-size: cover; ">
    <div class="overlay-itro"></div>
  <br>
  <br>
  <br>
  <hr>
    <div class="container mt-5">
    <div class="card" >
      <h2 class="text-center ">Coach Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Coach Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Gender </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Status</h3>
          </div>
        </div>
      </div>
      <div class="card-body bg-dark">
       <?php
        $con=mysqli_connect('localhost','root','','dance');
            $cid=$_SESSION['cid'];
          $sql="SELECT * FROM coach WHERE cid='$cid'";
           $run=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($run);
         $cname=$row['cname'];
         $cid=$row['cid'];
         $dstyle=$row['dstyle'];
         $gender=$row['gender'];
         $cselect=$row['cselect'];
            echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $cname</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$gender</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$cselect</h4>
          </div>
          
        </div>";

       ?>
      </div>
    </div>
  </div>
  </div>
  <!--/ Intro Skew End /-->

  

  <!--/ Section Services Star /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
    <div class="overlay-mf"></div> 
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Dance Style
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(img/img5.jpg); background-size: cover; height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white mr-5"> <b>Bharatanatyam </b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img8.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Kathakali</b></h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img6.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white " > <b>Folk </b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img2.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Ballet</b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img3.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Belly Dance</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img1.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Free Style</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img12.jpeg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Pole Dance</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(img/img15.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white" style="margin-right: 70px;"> <b>Salsa</b></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!--/ Section Services End /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
   <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="img/port1.jfif" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port1.jfif" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Workshop Name</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port2.jfif" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port2.jfif" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Workshop Name</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port3.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port3.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
         <div class="col-md-4">
          <div class="work-box">
            <a href="img/port6.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port6.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port4.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port4.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port5.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port5.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</div>

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back3.jpg);background-size: cover;">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">450</p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">3</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">550</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">36</p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
 
<div class="section-counter paralax-mf bg-image" style="background-image: url(img/back3.jpg);background-size: cover;">
    <div class="overlay-mf"></div>
 <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="">
            <div class="row">
              <div class="col-md-6">
                    <div class="about-img">
                      <img src="img/img7.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                 
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left text-white">
                      About me
                    </h5>
                  </div>
                  <p class=" text-white lead">
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/back3.jpg)">
      <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
          
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/rajesh.jpg" alt="" class="rounded-circle b-shadow-a" width="150" height="150">
                <span class="author">Rajesh</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  I am Rajesh Singh Rathore , pursuing  BE from computer science and Engeneering From Visvesvaraya Technological University.I am Good at web devlopment.I am Basically From Bhind Distt Madhya Pradesh. Today's Education is Just Like a Jumbled Game where people Uses to try those things where their Field of intrest lies within.So I am also trying my hand Best in web Devlopment.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="paralax-mf footer-paralax bg-image  route" style="background-image: url(img/back3.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-mf">
            <div id="contact">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left text-white">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class=" text-white lead">
                      Vasi Games headquarter
                     </p>
                    <ul class="list-ico text-white">
                      <li><span class="ion-ios-location"></span>5P-704 Provident Sunworth Bangalore</li>
                      <li><span class="ion-ios-telephone"></span> +919608472701</li>
                      <li><span class="ion-email"></span> vasigames19@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Dance Workshop</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="#">Rajesh singh Rathod </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
