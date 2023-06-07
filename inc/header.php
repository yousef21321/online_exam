<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <!-- Bootstrap core CSS 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
	</head>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::init();

include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
});

$db = new Database();
$fm = new Format();
$usr = new User();
$exm = new Exam();
$pro = new process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<!--<head>
	<title>Online Exam System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>-->
<body>

<?php
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    Session::destroy();
    header("Location:index.php");
    exit();
}
?>
<?php
if(isset($_GET['action2']) && $_GET['action2'] == 'logout2'){
    Session::destroy();
    header("Location:C:\Users\y0101\OneDrive\Desktop\STudent فاطمه\index.html");
    exit();
}
?>
<div class="phpcoding">
		<section class="maincontent">
		<div class="menu">
		<ul>
            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="exam.php">Exam</a></li>
			<li><a href="?action=logout">Logout</a></li>

            <?php }else {
            ?>
            <li><a href="index.php">Login</a></li>
            <li><a href="register.php">Register</a></li>

            <?php } ?>
		</ul>

            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
    
            <h2  >
            <em>
                Welcome <strong><?php echo Session::get("username"); ?></strong>
            </em>
            </h2>
            <?php } ?>
		</div>
	