<?php
include 'config.php';
include('header.php');
?>





    <!-- home -->
    <section class="home">

	<h1 id="animtxt" >Book Your Tickets Online.......</h1>
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->
        <!-- carousol -->
        
 <div class="row">

 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home/home__bg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/home__bg2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/home__bg3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 </div>
        </div>
</section>
        <!-- homepg carousol -->

 	<!-- content -->
   <section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2  class="content__title">New items</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
            <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">New Release</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

   </div>
    </div>
        </div>
             </div>


   <div class="container">
			<!-- content tabs -->
			
			<div class="row">

			<?php
						$in_select=mysqli_query($con,"select * from tbladdmovie");
						foreach($in_select as $in_data)
						{
						?>

				<!-- card -->
				<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="<?php echo "ad/".$in_data['movie_image']?>" alt="">
											<a href="#" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div  class="col-12 col-sm-8" >
										<div class="card__content ">
											<h3  class="card__title "><a  href="#"><?php  echo $in_data['movie_name']; ?></a></h3>
											
											<!-- //genre name -->
											<ul>
											<li style="color:#ff55a5;">
											<span class="card__category">
											<?php
											 $genre_sel=mysqli_query($con,"select genre_name from tblgenre where genre_id='$in_data[genre_id]'");
											 $genre_data=mysqli_fetch_assoc($genre_sel);
											 echo $genre_data['genre_name'];
											?>	
											</span>
											</li>
											</ul>



											<!-- industry and language -->
											<div  class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

											<ul  class="card__list">

											<li style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);">
											<span class="card__category ">
											<?php
											 $indus_sel=mysqli_query($con,"select industry_name from tblindustry where industry_id='$in_data[industry_id]'");
											 $indus_data=mysqli_fetch_assoc($indus_sel);
											 echo $indus_data['industry_name'];
											?>	
											</span>
											</li>


											
											<li style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);">											
											<span class="card__category ">
											<?php
											$lang_sel=mysqli_query($con,"select language from tbllanguage where language_id='$in_data[language_id]'");
											 $lang_data=mysqli_fetch_assoc($lang_sel);
											 echo $lang_data['language'];
											?>	
											</span>													
										    </li>

												</ul>
											</div>
                                               <!-- CARD END -->


											<div style="height:auto" class="card__description">


											 <!-- CINEMA -->
											<p style="color:azure;">Cinema
											<?php
											 $cinema_sel=mysqli_query($con,"select cinema_name from tblcinema where cinema_id='$in_data[cinema_id]'");
											 $cinema_data=mysqli_fetch_assoc($cinema_sel);
											 echo $cinema_data['cinema_name'];
											?>													
											</p>
											<!-- CINEMA -->


											 <!-- DATE -->
											 <p style="color:azure;">Movie Date : 
											<?php
											  echo date("d-M-l");
											?>													
											</p>
											<!-- DATE -->

											<!-- timings -->
											<p style="color:azure;">Movie Timings : 
											<?php echo $in_data['movie_time'];?>													
											</p>
											<!-- timings -->
										
										

											</div>
										</div>
									</div>

									<div class="container-fluid mt-3">	
											
										<a class="form-control text-center" style=" color:white; background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);" href="moviedet.php?A=<?php echo $in_data['movie_id'];?>">Movie Details & Bookings</a>
										</div>
								</div>
							</div>
						</div>
						<!-- end card -->
				 
        	    	<?php
            	    }                 
		            	?>
</div>
 </div>


  </section>

  <script>

  </script>


<?php
include('footer.php');
?>