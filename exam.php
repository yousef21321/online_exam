<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Online Exam</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
	<?php include 'inc/header.php'; ?>
	</head>

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
      <div class="phpcoding">
	<section class="headeroption"></section>
		<section class="maincontent">
    <li><a href="StProfile.html">Profile</a></li>
			<li><a href="?action=logout">Logout</a></li>
      


            <?php  ?>
        
    </nav>
  </header>
  <!--------------------------------------------------->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Online test</h6>
              <h2><em>Welcome to Online Exam</em> -- Start Here</h2>
              <div class="main-button">
                  <!--<div class="scroll-to-section"><a href="#section2">Discover more</a></div>-->
                  <li><a href="start_test.php">Start Here...</a></li>
              </div>
          </div>
      </div>

<div class="main">
<!--<h1>Welcome to Online Exam - Start Here</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
	<h2>Online Exam</h2>
        <p style="text-align: justify; display: block; font-size: 16px; color: #444444">Online examination is conducting a test online to measure the knowledge of the participants on a given topic.
            In the olden days everybody had to gather in a classroom at the same time to take an exam.
        For Online exam, you need a browser and the internet connection. It is a web based online examination solution
            for students, organizations, coaching institutes which can be customized as per the requirements.This management system provides
            simple and intuitive interface, a hassle-free flow from one test process to another.</p>
	<ul style="padding-top: 20px; padding-left: 50px;">-->
		<li><a href="start_test.php">Start Here...</a></li>
	</ul>
	</div>
	</section>
	
  </div>
<?php include 'inc/footer.php'; ?>