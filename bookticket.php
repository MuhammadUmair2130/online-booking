<?php
include('config.php');
include('header.php');
?>

<?php 

if(!$_SESSION['lg']){
 
    echo 
      "
      <script>window.location.assign('login.php')</script>
      ";
    
    
   }
?>




<?php
$book_tic_id=$_GET['A'];
$book_tic_sel=mysqli_query($con,"select * from tbladdmovie where movie_id='$book_tic_id'");
$book_tic_fetch=mysqli_fetch_assoc($book_tic_sel);

?>

 <!-- BOOKING AND TICKETS CONTENT -->

 <div class="container ">
 <h1 class="text-center text-white my-5 pt-5">MOVIE SCHEDULES</h1>
 <div class="col-12 col-sm-12 col-lg-12">	
				

				<!-- content -->
			
					<div class="card card--list" style="background:transparent;border:none;padding:15px 15px;box-shadow: 0 5px 25px 0 rgb(0 0 0 / 30%);">
						<div class="row">
                  <div class="col-12 col-sm-4 ">
								<div  class="card__cover">
                                <img src="<?php echo "ad/".$book_tic_fetch['movie_image']?>" height="450px" width="300px" >
								</div>
                        </div>

                        <div class="col-12 col-sm-8">
										<div>
											<h3  class="display-5  text-white"><?php  echo $book_tic_fetch['movie_name']; ?> (3D)</h3>

											</div>
                                 <br>
             
                         <!-- cinema         -->
                     <div > 
                         <p style="color: white;">Cinema:
                    	<?php
		    	       $cinema_sel=mysqli_query($con,"select cinema_name from tblcinema where cinema_id='$book_tic_fetch[cinema_id]'");
			           $cinema_data=mysqli_fetch_assoc($cinema_sel);
                    echo "<h3 class='text-white'>".$cinema_data['cinema_name']."</h3>";
	        	        ?>
                	</h3>

                    <!-- cinema         -->

                  <!-- TIMINGS -->
                             <p  style="color:white;"> Movie Timimgs :
                                         
                                         <?php 
                                         	
                                         	echo "<h3 class='text-white'>".$book_tic_fetch['movie_time']."</h3>";
                                                                                	
                                         ?>
                                         </p>

                                         </div>               
                     <!-- TIMINGS -->
                  
                     <form action="" method="post" enctype="multipart/form-data">


                      <!-- hidden input -->
                                       
                                        <input type="hidden"   name="ux_mail"      value="<?php  echo $_SESSION["lg"]; ?>">
                                        <input type="hidden"   name="ux_name"      value="<?php  echo $_SESSION["lg_name"]; ?>">
                                        <input type="hidden"   name="ux_mov_time"   value="<?php   echo $book_tic_fetch['movie_time']; ?>">
                                        <input type="hidden"   name="ux_mov_img"   value="<?php   echo $book_tic_fetch['movie_image']; ?>">
                                        <input type="hidden"   name="ux_mov_cin"   value="<?php   echo $cinema_data['cinema_name']; ?>">
                                        <input type="hidden"   name="ux_mov_name"  value="<?php  echo $book_tic_fetch['movie_name']; ?>">
									<!-- hidden input -->
                     
                          <p style="color:white;">Which Show do you want to go?</p>
										   <select  name="ux_mov_date" class="form-control"  style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);border:none;color:black;">
                                          <option disabled selected>Select Your Show day!</option>
                                          <option><?php echo date("d-M-l"); ?></option>
                                          <option><?php echo date("d-M-l",strtotime( "+1 days" )); ?></option>
                                         <option><?php echo date("d-M-l",strtotime( "+2 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+3 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+4 days" )); ?></option>
															 <option><?php echo date("d-M-l",strtotime( "+5 days" )); ?></option>
                                            </select>

											<!-- date and time -->

											<!-- seatings -->

						  <!-- <label class="mt-3" style="color:white;" class="form-label" >Enter seatings cateogary</label>
                           <select style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);border:none;color:black;" class="form-control mt-3" name="ux_mov_seat" >
                            <option selected disabled>select your seat</option> -->


                            <p style="color:white;" class="mt-3">Choose Your Seat Class ?</p>
                                <?php
                                $mov_price=mysqli_query($con,"select * from tblprice where movie_name_price='$book_tic_fetch[movie_name]'");
                                foreach($mov_price as $data){
                                    ?>
                                    <select  name="ux_mov_seat" class="form-control"   style="background-image:   -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);border:none;  color:black;">
												<option disabled selected>Select Your Seat !</option>
												<option>Economy : <?php echo $data['economy']; ?></option>
												<option>premium : <?php echo $data['premium']; ?></option>
												
												</select>
                                        <?php

                                }
                                ?>                               
                        
                                 <!-- seatings -->



                                       <!-- number of seats -->
											<p style="color:white;" class="mt-3">Select Number Of Seats ?</p>
										   <select  name="ux_no_of_seat" class="form-control" style="color:black; background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);border:none;color:black;">
                                                             <option disabled selected>Select Your Show !</option>
                                                             <option>1</option>
                                                             <option>2</option>
                                                             <option>3</option>
															 <option>4</option>
															 <option>5</option>
															 <option>6</option>
															 <option>7</option>
															 <option>8</option>
															 <option>9</option>
															 <option>10</option>
                                            </select>

                                            <!-- number of seats -->


                                            <!-- enter card number -->

										<p style="color:white;" class="mt-3"><i class="fa fa-cc-visa" aria-hidden="true"></i>Add Debit Or Credit Card Number</p>

                                      <input  type="text" name="ux_card_no"  class="form-control  mt-4" style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);color:white;border:none;" placeholder="5555-5555-5555-5555" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" autocomplete="off" required>

                                     

                               <!-- enter card number -->

                                    <!-- veiw more detail btn -->
                                         <center>
                                            <input  type="submit" value="Confirm Ticket" name="btnconfirm"  class="text-center btn mt-4" style="background-image: -webkit-linear-gradient(0deg, #ff55a5 0%, #ff5860 100%);color:white;border:none;">
										    	</center>
                                        <!-- veiw more detail btn -->

      

                        </form>

                  </div>

</div>
 </div>
 </div>
 </div>
 </div>

 <?php
 if(isset($_POST['btnconfirm']))
 
 {
    
    $uxname=$_POST['ux_name'];
    $uxmail=$_POST['ux_mail'];
    $uxmovtime=$_POST['ux_mov_time'];  
    $uxmovcin=$_POST['ux_mov_cin'];
    $uxmovname=$_POST['ux_mov_name'];
    $uxmovdate=$_POST['ux_mov_date'];
    $uxmovseat=$_POST['ux_mov_seat'];
    $uxnoofseat=$_POST['ux_no_of_seat'];
    $uxcardno=$_POST['ux_card_no'];
    $uxmovimg=$_POST['ux_mov_img'];

    echo '<script>alert("Are you Sure, You Want to Submit?")</script>';


$insert_ux_detail=mysqli_query($con,"insert into booking_details values ('null','$uxname','$uxmail','$uxmovtime','$uxmovcin','$uxmovname','$uxmovdate','$uxmovseat','$uxnoofseat','$uxcardno','$uxmovimg')");

if($insert_ux_detail>0){
    echo "<script>window.location.assign('userbooking.php')</script>";
}
 }
 ?>




<?php
include 'footer.php';
?>