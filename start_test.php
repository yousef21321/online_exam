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
$question = $exm->getQuestion();
$total    = $exm->getTotalRows();
?>
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Online</em>Exam</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class="has-submenu"><a href="#section2">About Us</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
        </li>
        <li><a href="#section4">Courses</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <li><a href="https://templatemo.com" class="external">External</a></li>
      </ul>
    </nav>
  </header>
  <!--------------------------->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
          <div class="main">
        <h2><em>Welcome to Online Exam</em></h2>
       
                <h2><em>Number of Questions:</em>  <?php echo $total; ?> </h2>
                <em><h2>Question Type:</em> <em>Multiple Choice</em></h2>
           
      
            <br/>
            <br/>

           <!---- <a style="color: green; border-color: green; border-radius: 13px" href="test.php?q=<?php echo $question['quesNo']; ?>">Start
             Test Now!</a> -->
             <div class="main-button"> <li><a href="test.php?q=<?php echo $question['quesNo']; ?>">Start
             Test Now!</a></li> </div>
        </div>
    </div>
          </div>
      </div>
  </section>
    
<?php include 'inc/footer.php'; ?>