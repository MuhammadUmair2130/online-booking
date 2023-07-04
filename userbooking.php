<?php
include 'config.php';
include 'header.php';
?>


<section class="section section--first section--bg" data-bg="img/section/section.jpg">
<div class="container">
<div class="row">
    
<div class="col-12 mt-5 pt-5">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">My Account & Bookings</h2>
						<!-- end section title -->
    
						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Account & Bookings</li>
						</ul>
						<!-- end breadcrumb -->
                    </div>
</div>
</div>
<!--   -->
</section>


<div class="container">
    <div class="row ">
        <div class="col-12">
            <div class="section__wrap">
            <h3  class="fw-lighter text-light">User Email :<?php echo $_SESSION['lg']?></h3>
            <h3  class="fw-lighter text-light">User Name :<?php echo $_SESSION['lg_name']?></h3>
            </div>
        </div>

    </div>
</div>

<hr style="background-image:linear-gradient(#ff55a5, #ff5860);height:10px;">

<?php
$ticket_book=mysqli_query($con,"select * from booking_details where user_email='$_SESSION[lg]'");
foreach ($ticket_book as $ticket) 
{
?>   
<div class="container mt-5 pt-5">
    <div class="row bg-white" style="border-radius:5px;background: linear-gradient(to right, #ece9e6, #ffffff);" >
    
       <!-- col for img -->

       <div class="col-sm-3">
	<img  src="<?php  echo $ticket['user_movie_img'] ?>" class="img-fluid img-thumbnail" width="200" height="100">
    </div>

    <!-- col for center info -->

    <div class="col-6 text-center" style="border-left:2px dashed #404040;border-right:2px dashed #404040;border-width:8px;">
  

	<p class="mt-2" style="text-transform:uppercase;font-size:30px;letter-spacing:10px;border-top:1px solid black;border-bottom:1px solid black;">
		<?php  echo $ticket['user_date'] ?>
	</p>
		<h1 style="font-family:ubantu;"><?php  echo $ticket['user_movie_name'] ?></h1>
		<h1 style="font-family:cursive;"><?php  echo $ticket['user_movie_cinema'] ?></h1>
		<p class="h4"><?php  echo $ticket['user_movie_dur'] ?></p>
		<h2><?php  echo $ticket['user_price']." X ".$ticket['user_seat'] ?></h2>
    </div>
     
    <div class="col-sm-3">
        <h5 style=" font-family:ubantu font-size:30px;letter-spacing:6px;border-top:1px solid black;border-bottom:1px solid black;" >User Email : <?php echo $_SESSION['lg']?></h5>
        
        <center>
        <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" whidth="120" height="150" image="img-fluid">
        </center>

        <h5 style=" font-family:ubantu font-size:30px;letter-spacing:6px;border-top:1px solid black;border-bottom:1px solid black;" >User Name : <?php echo $_SESSION['lg_name']?></h5>
    </div>


<!-- col for center info -->


</div>
</div>



<?php
}
?>




<?php
include 'footer.php';
?>


