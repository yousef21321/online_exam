<?php include 'inc/header2.php'; ?>

<?php
  Session::checkLogin();
?>



	
	<div class="center">
	<form action="" method="POST">
			   <td>E-mail:</td>
			   <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
			 <tr>
			   <td>Password:</td>
			   <td><input name="password" id="password" type="password" required="" placeholder="Enter Password"></td>
			 </tr>
			 <tr>
				<td colspan="2">
                    <?php
                       if(isset($adminData)){
                           echo $adminData;
                       }
                    ?>
                </td>
			</tr>
			  <tr>
			  <td></td>
			   <td class="button_class"><input type="submit" id="loginSubmit" value="Login">
			   </td>
			 </tr>
	   </form>

        
	
</div>
<?php include 'inc/footer.php'; ?>