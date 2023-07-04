<?php
include ('config.php');
include('header.php');
?>
<br>
<br>
<br>

<div class="container ">
    <div class="row">
    <h2  class="content__title mt-5 text-center">BOLLYWOOD</h2>
    </div>
</div>



<div class="container">
			<!-- content tabs -->
			
			<div class="row">

			<?php
						$in_select=mysqli_query($con,"select * from tbladdmovie where industry_id=2");
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


<?php
include('footer.php');
?>
