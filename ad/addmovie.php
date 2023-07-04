<?php
include 'config.php';
include 'adh.php';
?>

<!-- must include this file in every page for page title  -->

<div class="page-content">
        <div class="page-header">
          <div class="container-fluid my-3">
            <h2 class="h5 no-margin-bottom">Add & View Industry</h2>
          </div>
        </div>
        

<!-- must include this file in every page for page title  -->
    
    <div class="col-lg-12 ">
    <div class="block">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h4 mb-0">Movies</h3>
                  </div>
                  <div class="card-body pt-0">
                    <p class="text-sm">Add New Movies.</p>
                    <form method="post" action="" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label class="form-label" >Enter movie name</label>
                        <input class="form-control" name="movie_name"  type="text" required >                                                  
                      </div>

                      <div class="mb-3">
                        <label class="form-label" >Enter cinema Name</label>
                        <select  class="form-control" name="cinema_name" >
                            <option selected disabled>select</option>
                                  <?php
                                $select=mysqli_query($con,"select * from tblcinema");
                                foreach($select as $data){
                                    echo "
                                    <option value=$data[cinema_id]>$data[cinema_name] </option>
                                    ";
                                }
                                ?>                               
                        </select>                                                  
                      </div>

                      <div class="mb-3">
                        <label class="form-label" >Enter movie date</label>
                        <select  class="form-control" name="cinema_date" >
                            <option selected disabled>select</option>
                                <?php
                                $select=mysqli_query($con,"select * from tbldate");
                                foreach($select as $data){
                                    echo "
                                    <option value= $data[date_id]>$data[cinema_date] </option>
                                    ";
                                }
                                ?>                               
                        </select>                                                  
                      </div>

                      <div class="mb-3">
                        <label class="form-label" >Enter movie genre</label>
                        <select  class="form-control" name="movie_genre" >
                            <option selected disabled>select</option>
                                <?php
                                $select=mysqli_query($con,"select * from tblgenre");
                                foreach($select as $data){
                                    echo "
                                    <option value=$data[genre_id]>$data[genre_name]</option>
                                    ";
                                }
                                ?>                               
                        </select>                                                  
                      </div>


                      <div class="mb-3">
                        <label class="form-label" >Enter movie industry</label>
                        <select  class="form-control" name="movie_industry" >
                            <option selected disabled>select</option>
                                <?php
                                $select=mysqli_query($con,"select * from tblindustry");
                                foreach($select as $data){
                                    echo "
                                    <option value=$data[industry_id]> $data[industry_name]</option>
                                    ";
                                }
                                ?>                               
                        </select>                                                  
                      </div>

                      <div class="mb-3">
                        <label class="form-label" >Enter movie language</label>
                        <select  class="form-control" name="movie_language" >
                            <option selected disabled>select</option>
                                <?php
                                $select=mysqli_query($con,"select * from tbllanguage");
                                foreach($select as $data){
                                    echo "
                                    <option value=$data[language_id]> $data[language]</option>
                                    ";
                                }
                                ?>                               
                        </select>                                                  
                      </div>


                      <div class="mb-3">
                        <label class="form-label" >Enter Movie poster</label>
                        <input class="form-control" placeholder="Enter Movie poster" name="movie_poster" type="file" >                                                  
                      </div>
                      
                      <div class="mb-3">
                        <label class="form-label" >Enter Movie trailer URL</label>
                        <input class="form-control" placeholder="Enter Movie trailer URL" name="movie_trl_URL" type="text" >                                                  
                      </div>
                                 

                      <div class="mb-3">
                      <label class=" form-label">Movie Timings</label>
                        <div class="col-sm-9">
                        <select  class="form-control" name="movie_time">
                          <option disabled selected>Movie timings in Hours . (Example : 5 AM to 7 AM )</option>
                                       <option>1:00 PM to 2:15 PM</option>
                                       <option>2:15 PM to 4:00 PM</option>
                                       <option>4:00 PM to 5:30 PM</option>
                                       <option>5:30 PM to 7:25 PM</option>
                                       <option>7:25 PM to 9:10 PM</option>
                                       <option>9:10 PM PM to 10:40 PM</option>
                                       <option>10:40 PM PM to 12:00 AM</option>
                                       <option>12:00 PM PM to 1:30 AM</option>
                          </select>

                      </div>        


                      <input type="submit" class="btn btn-danger mt-3" name="btnmovie" >
                    </form>
                  </div>
                </div>
              </div>
              </div>
         

            <?php
            if(isset($_POST['btnmovie'])){
                $moviename=$_POST['movie_name'];
                $cinemaname=$_POST['cinema_name'];
                $cinemadate=$_POST['cinema_date'];
                $moviegenre=$_POST['movie_genre'];
                $movieindustry=$_POST['movie_industry'];
                $movielanguage=$_POST['movie_language'];
                $movietrlURL=$_POST['movie_trl_URL'];
                $movietime=$_POST['movie_time'];

                $movieposter=$_FILES['movie_poster']['name'];
                $moviepostertmp=$_FILES['movie_poster']['tmp_name'];
                move_uploaded_file($moviepostertmp ,$movieposter);

                $insert=mysqli_query($con,"insert into tbladdmovie values('null','$moviename','$cinemaname','$cinemadate','$moviegenre','$movieindustry','$movielanguage','$movieposter','$movietrlURL','$movietime')");

            }
            ?>


<?php
include 'adf.php';
?>