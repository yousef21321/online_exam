<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Doctor Add Exam</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

	</head>
    <style>
    .th{
        color :coral;
        font-size: larger;
        font-style: italic;
    }
   </style>
    <?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/Exam.php');

$exm = new Exam();
?>
<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Add</em>Exam</a>
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
   
<?php
   if(isset($_GET['delQues'])){
       $quesNo = (int)$_GET['delQues'];
       $delQues = $exm->delQuestion($quesNo);
   }
?>
<section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>    
<div class="video-overlay header-text">
    
<div class="caption">
          <h2 style="text-align: center; font-size: 24px">Question List</h2>

        <?php
           if(isset($delQues)){
               echo $delQues;
           }
        ?>

        <div class="queslist">
            <table class="tblone">
                <tr>
                    <th style="color :coral;
        font-size: larger;
        font-style: italic;" width="10%">No</th>
                    <th style="color :coral;
        font-size: larger;
        font-style: italic;"width="75%">Questions</th>
                    <th style="color :coral;
        font-size: larger;
        font-style: italic;"width="15%">Action</th>
                </tr>

                <?php
                $getData = $exm->getQuesByOrder();
                if($getData){
                    $i = 0;
                    while($result = $getData->fetch_assoc()){
                        $i++;
                 ?>

                        <tr>
                            <td style="color :coral;
        font-size: larger;
        font-style: italic;"><?php echo $i; ?></td>
                            <td style="color :coral;
        font-size: larger;
        font-style: italic;"><?php echo $result['ques']; ?></td>
                            <td style="color :coral;
        font-size: larger;
        font-style: italic;"> 
                                <a style="color: red; text-decoration: none" onclick="return confirm('Are You Sure to Remove?')" href="?delQues=<?php echo $result['quesNo']; ?>">Remove</a>
                            </td>
                        </tr>

                    <?php } } ?>

            </table>
        </div>
    </div>
    </div>

</section>

<?php include 'inc/footer.php'; ?>