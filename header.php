<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
     <link rel="shortcut icon" href="icon/favi.png" type="image/x-icon">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Online Movie Booking System – Online Movies, TV Shows & Cinema Booking</title>
	<!-- custom css for header -->
<style>
	
	.header__nav-link{
		font-size: 11px !important;
	}
	a{
		text-decoration:none;
	}
	/* importing ubantu font */
	@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
	/* importing ubantu font */

/* main logo css */
#main__logo{
	color:rgba(255,255,255,0.75);
	font-family: 'Ubuntu', sans-serif;
	text-transform:Uppercase;
	padding-top:15px;
	transition:1s;
}
#main__logo:hover{
	color:#d63384;
	transition:1s;
}


.anim{
	
	position: absolute;
	top:3%;
	left:35%;
	transform:translate(-50%,-50%);
	font-size:60px;
	color:transparent;
	background-image:linear-gradient(black,#fff);
	font-family: 'Ubuntu';
	border-right: 3px solid;	
	background-repeat:no-repeat;
	-webkit-background-clip:text;
	background-position:-750px 0;
	animation: animate 3s linear infinite alternate;
	/* -webkit-text-stroke:1px #fff; */
}
@keyframes animate{
	100%
	{
		background-position:0 0;	
	}
	/* 70%,90%
	{
		width: 100%;
	} */
	
}
/* main logo css */

</style>
	<!-- custom css for header -->

</head>
<body class="body">
	

		<?php
		if(isset($_SESSION["lg"])){			
		
		echo 
		'

		<!-- header -->
<header class="header">
	<div class="header__wrap" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<img src="icon/main__logo.png" width=70 height=70  style="display:inline">
						<a href="index.php" style="background-color:#2b2b31;">
						<h6 id="main__logo">Online Movie <br> Booking System</h6>
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a href="index.php" class="header__nav-link">Home</a>
							</li>

							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies Categories</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
								<li><a href="hollywood.php">hollyWood</a></li>
								<li><a href="bollywood.php">BollyWood</a></li>
								<li><a href="lollywood.php">LollyWood</a></li>

								
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.php" class="header__nav-link">Ticket Pricing</a>
							</li>

							<li class="header__nav-item">
								<a href="about.php" class="header__nav-link">About Us</a>
							</li>
							
							<li class="header__nav-item">
								<a href="faq.php" class="header__nav-link">Help</a>
							</li>
							<li class="header__nav-item">
								<a href="userbooking.php" class="header__nav-link">my account</a>
							</li>
							<!-- dropdown -->
							
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">

							<a href="logout.php" class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
								<span>Logout</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</div>

	
</header>
<!-- end header -->
		
		';
	}
		

		else{
			
			echo 
		'

		<!-- header -->
<header class="header">
	<div class="header__wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<img src="icon/main__logo.png" width=70 height=70  style="display:inline">
						<a href="index.php" style="background-color:#2b2b31;">
						<h6 id="main__logo">Online Movie <br> Booking System</h6>
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a href="index.php" class="header__nav-link">Home</a>
							</li>

							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Movies Categories</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
								<li><a href="hollywood.php">HollyWood</a></li>
								<li><a href="bollywood.php">BollyWood</a></li>
								<li><a href="lollywood.php">LollyWood</a></li>

								
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="#" class="header__nav-link">Ticket Pricing</a>
							</li>

							<li class="header__nav-item">
								<a href="about.php" class="header__nav-link">About Us</a>
							</li>
							
							<li class="header__nav-item">
								<a href="faq.php" class="header__nav-link">Help</a>
							</li>
							<li class="header__nav-item">
								<a href="signup.php" class="header__nav-link">sign up</a>
							</li>
							<!-- dropdown -->
							
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">

							<a href="login.php" class="header__sign-in">
								<i class="icon ion-ios-log-in"></i>
								<span>Login</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</div>

	
</header>
<!-- end header -->
		
		';
		}

	
	?>



