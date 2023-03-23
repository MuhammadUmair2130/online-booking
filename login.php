<?php
include('header.php');
?>


<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="post" class="sign__form">
						<div class="sign__group">
                                  <h3 class="text-white">Login Page</h3>
							</div>

							<div class="sign__group">
								<input type="text" name="user_email" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" name="user_password" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<input type="submit" name="btnuslogin" class="btn btn-success">

							<span class="sign__text">Don't have an account? <a href="signup.php">Sign up!</a></span>

							<span class="sign__text"><a href="signup.php">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
if(isset($_POST['btnuslogin'])){
	$useremail=$_POST['user_email'];
	$userpassword=$_POST['user_password'];

	$login_sel=mysqli_query($con,"select name,email,password from tblsignup where email='$useremail' and password='$userpassword'");
	$lg_fetch=mysqli_fetch_assoc($login_sel);
	if(mysqli_num_rows($login_sel)>0){

		$_SESSION["lg"]=$lg_fetch['email'];
		$_SESSION["lg_name"]=$lg_fetch['name'];

			
	

		echo "<script>window.location.assign('index.php')</script>";

	}
	else{
		echo '<script>alert("incorrect email and password")</script> ';
	}
}

?>

<?php
include('footer.php');
?>