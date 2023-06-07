
<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/loginheader.php');
	include_once ($filepath.'/../classes/Admin.php');
    $ad = new Admin();
?>
<?php
Session::checkSession();
?>
<strong style="color: #444444">Final Score:
            <?php
               if(isset($_SESSION['score'])){
                   echo $_SESSION['score'];
                   unset($_SESSION['score']);
               }
            ?>
            </strong>