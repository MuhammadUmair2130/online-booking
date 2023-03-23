<?php
include 'config.php';
include 'header.php';
?>

<?php
$mov_det_id=$_GET['A'];
$mov_det_sel=mysqli_query($con,"select * from tbladdmovie where movie_id='$mov_det_id'");
foreach($mov_det_sel as $mov_det_data){

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
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
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Online Movie And Booking Website</title>

</head>
<body class="body">

<!-- details -->
<section class="section details">

    <!-- front image -->
<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
      
       <!-- movie trailer -->

    <section>

<div class="container">

      <iframe width="1140" height="641" src="<?php echo  $mov_det_data['movie_trl_url']; ?>?autoplay=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);"></iframe>   

</div>

</section>
<!-- movie trailer --> 

<div class="container align ">
			<div class="row justify-content-center">
				

				<!-- content -->
				<div class="col-10 mt-3">
					<div class="card card--details card--series" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
						<div class="row">
							<!-- title -->
				<div class="col-12 mt-3 ">
				 <h1 class="details__title fw-lighter text-light text-center"><i class="fa fa-film text-light" style="font-size:36px"></i><?php echo "&nbsp;&nbsp;&nbsp;".$mov_det_data['movie_name'];?></h1>
				</div>
				<!-- end title -->
							<!-- card cover -->
							<div class="col-12 col-sm-4 ">
								<div class="card__cover">
                                <img src="<?php echo "ad/".$mov_det_data['movie_image']?>" alt="">
								</div>
							</div>
							<!-- end card cover -->

			<div class="col">
			<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2  class="accordion-header" id="headingOne">
      <button style=" color:white; background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);"  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <h3>Show details</h3>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
	  

	<h5> Cinema:
	<?php
			 $cinema_sel=mysqli_query($con,"select cinema_name from tblcinema where cinema_id='$mov_det_data[cinema_id]'");
			 $cinema_data=mysqli_fetch_assoc($cinema_sel);
			 echo $cinema_data['cinema_name'];
		?>
	</h5>

	<h5> Movie date:
	<?php
			 echo date("d-M-l");
				?>
	</h5>

	<h5>
	<?php echo $mov_det_data['movie_time'];?>
	</h5>

	</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button style=" color:white; background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h3>Movie Cast and Story line</h3>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
	

		        	<!-- GENRE -->
					<h5>
						<?php
						 $genre_sel=mysqli_query($con,"select genre_name from tblgenre where genre_id='$mov_det_data[genre_id]'");
						 $genre_data=mysqli_fetch_assoc($genre_sel);
						 echo $genre_data['genre_name'];
						?>
					</h5>
					<!-- GENRE -->

					<!-- LANGUAGE -->
					<h5>
						<?php
						$lang_sel=mysqli_query($con,"select language from tbllanguage where language_id='$mov_det_data[language_id]'");
						$lang_data=mysqli_fetch_assoc($lang_sel);
						echo $lang_data['language'];
						?>
					</h5>
					<!-- LANGUAGE -->

			<!-- Industry -->
	  <h5> Industry :
	  <?php
						 $indus_sel=mysqli_query($con,"select industry_name from tblindustry where industry_id='$mov_det_data[industry_id]'");
						 $indus_data=mysqli_fetch_assoc($indus_sel);
						 echo $indus_data['industry_name'];
	?>
	</h5>
			<!-- Industry -->





      </div>
    </div>
  </div>
  

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button style=" color:white; background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <h3>Movie Ratings</h3>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        
	  <h5>
	  <span> Movie Ratings : 8.4 &nbsp;&nbsp;
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            </span>
			</h5>

      </div>
    </div>
  </div>
			 

    


</div>
</div>

<!-- book movie btn -->
<hr style="color:black;  width:895px;">
<center class="mb-3">
<a href="bookticket.php?A=<?php echo $mov_det_data['movie_id'];?>" class="header__sign-in">
     
      <span>Book Tickets</span>
</a>
</center>
<hr  style="color:black;  width:895px;">
<!-- book movie btn -->

 <!-- row and column div end       -->

							  


</section>

<!-- JS -->
<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>

<?php
include 'footer.php';
?>