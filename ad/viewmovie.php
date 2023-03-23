<?php
include 'config.php';
include 'adh.php';
?>

<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">View Movies</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->



    <div class="col-lg-12">
        <div class="block">
        <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Movie Poster</th>
                            <th>Movie Name</th>
                            <th>Cinema name</th>
                            <th>movie Date</th>
                            <th>Movie Genre</th>
                            <th>Movie Industry</th>
                            <th>Movie Language</th>
                            <th>Movie trl URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                        <?php
                        $select=mysqli_query($con,"select * from tbladdmovie");
                        foreach($select as $addmovie_data){
                        ?>
                          <tbody>
                             <tr>
                                <th scope="row">
                                    <?php echo $addmovie_data ['movie_id']?>
                                </th>
                                

                             <td>
                                <?php echo "<img src='$addmovie_data[movie_image]'  width='70px' alt=>"?>
                             </td>

                             <td>
                                <?php echo $addmovie_data['movie_name']?>
                             </td>

                             <td>
                             <?php $select=mysqli_query($con,"select cinema_name from tblcinema where cinema_id='$addmovie_data[cinema_id]'");
                                foreach($select as $cinema_data){
                                    echo $cinema_data['cinema_name'];
                                }
                                ?>
                                
                             </td>


                            <td>        
                             <?php
                             $select=mysqli_query($con,"select cinema_date from tbldate where date_id='$addmovie_data[date_id]'");
                             foreach($select as $date_data){
                                echo $date_data['cinema_date'];
                             }
                             ?>   
                             </td>

                             <td>
                             <?php
                             $select=mysqli_query($con,"select genre_name from tblgenre where genre_id='$addmovie_data[genre_id]'");
                             foreach($select as $genre_data){
                                echo $genre_data['genre_name'];
                             }
                            ?>
                             </td>


                             <td>
                                <?php
                             $select=mysqli_query($con,"select industry_name from tblindustry where industry_id='$addmovie_data[industry_id]'");
                             foreach($select as $industry_data){
                                echo $industry_data['industry_name'];
                             }
                            ?>
                             </td>


                             <td>
                             <?php
                             $select=mysqli_query($con,"select language from tbllanguage where language_id='$addmovie_data[language_id]'");
                             foreach($select as $language_data){
                                echo $language_data['language'];
                             }
                            ?>
                             </td>

                             <td>
                                <?php echo $addmovie_data['movie_trl_url']?>
                             </td>

                             <td>
                                <?php echo $addmovie_data['movie_time']?>
                             </td>


                             <td>
                             <a href="moviedel.php?B=<?php $addmovie_data['movie_id'];?>" class='btn btn-danger'>Delete</a>
                              <a href="movieedit.php?A=<?php $addmovie_data['movie_id'];?>" class="btn btn-success" >Edit</a>
                             </td>

                             </tr>
                          </tbody>
                          <?php 
                        }
                        ?>





                    </table>
            </div>
        </div>
    </div>






<?php
include 'adf.php';
?>