<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
	
	</head>
<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Online</em>Exam</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="http://localhost/online_exam/exam.php">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
        </li>
        <li><a href="#section4">Courses</a></li>
        <li><a href="#section6">Contact</a></li>
        <li><a href="" class="external">External</a></li>
      </ul>
    </nav>
  </header>


 <!--- <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
      </div>


    <div class="main">
        <h2>You are done!</h2>
            <br/>
            <h2>Congratulation! You have just completed the test.</h2>
         <h2>Final Score:
           
            </h2>

            <li><a href="viewAns.php">View Right Answer</a></li>
            
    </div> ---->
  </section>
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>You are done!</h6>
              <h2><em>Congratulation! You have just completed the test.

             <h2>Final Score:
            <?php
               if(isset($_SESSION['score'])){
                   echo $_SESSION['score'];
                   unset($_SESSION['score']);
               }
            ?>
            </h2>
              <div class="main-button">
                  <!--<div class="scroll-to-section"><a href="#section2">Discover more</a></div>-->
                  <li><a href="viewAns.php">View Right Answer</a></li>
              </div>
          </div>
      </div>


	</section>
	
  </div>
<?php include 'inc/footer.php'; ?>