<?php
include 'config.php';
include('header.php');
?>

<?php
if (isset($_POST['btnsignup'])) {

	$fn=$_POST['txtfn'];
	$email=$_POST['txtem'];
	$password=$_POST['txtp'];
	$confirmpassword=$_POST['txtcp'];
	// $type=$_POST['txtype'];

	$fname=$_FILES['txtf']['name'];
	$tmpname=$_FILES['txtf']['tmp_name'];
	move_uploaded_file($tmpname,$fname);

	if($password==$confirmpassword){
		
		$insert=mysqli_query($con,"insert into tblsignup values('null','$fn','$email','$password')");
		echo "<script>window.location.assign('login.php')</script>";

	}
}
?>

<div class="sign section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="#" class="sign__form" method="post" >
							
                            <div class="sign__group">
                                  <h3 class="text-white">Registration</h3>
							</div>	

							<div class="sign__group">
								<input type="text" name="txtfn" class="sign__input" placeholder="Full Name">
							</div>

							<div class="sign__group">
								<input type="email" name="txtem" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" name="txtp" class="sign__input" placeholder="Password">
							</div>

                            <div class="sign__group">
								<input type="password" name="txtcp" class="sign__input" placeholder="Confirm Password">
							</div>

							<!-- <div class="sign__group">
								<input type="text" name="txttype" class="sign__input" placeholder="type">
							</div> -->

							<!-- <input type="file" name=txtf class="sign__input" > -->

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							
							<button  type="submit" name="btnsignup" class="sign__btn" >Sign up</button>

							<span class="sign__text">Already have an account? <a href="login.php">login</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>




<?php
include('footer.php');
?>