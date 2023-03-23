
<?php
include 'config.php';
include 'adh.php';
?>

<?php
$editmovieid=$_GET['A'];
$editselect=mysqli_query($con,"select * from tbladdmovie where movie_id='$editmovieid'");
foreach($editselect as $edit_movie_data){
  //     echo $edit_movie['PId'];
   
//     echo $edit_movie['PPrice'];
//     echo $edit_movie['PDescription'];
//     echo $edit_moive['Image'];
}

?>
<!-- must include this file in every page for page title  -->
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Update Movies</h2>
          </div>
        </div>
<!-- must include this file in every page for page title  -->



    <div class="col-lg-12">
        <div class="block">
          <div class="tittle">update movie</div>
          <div class="block-body">
            <form method="post" enctype="multipart/form-data">
            <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movies Name</label>
                        <div class="col-sm-9">
                            <!-- hidden input here -->
                        <input type="hidden" name="edit_movie_id" value="<?php echo $editmovieid; ?>">
                        <!-- edit movie name -->
                          <input type="text" class="form-control" name="edit_movie_name" value="<?php echo $edit_movie_data['movie_name']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <!-- edit movie date -->
                        <label class="col-sm-3 form-control-label">Movie Image Poster</label>
                        <div class="col-sm-9">
                          <input type="file" required class="form-control" name="edit_movie_image" value="<?php echo $edit_movie_data['movie_image']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Trailer</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="edit_movie_trl_url" value="<?php echo $edit_movie_data['movie_trl_url']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Movie Duration</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="edit_movie_time" value="<?php echo $edit_movie_data['movie_time']; ?>">
                        </div>
                      </div>
                      <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" style="background-image: linear-gradient(90deg, #ff55a5 0%, #ff5860 100%);" name="btnupadte">Update Movie Info</button>
                        </div>
                    </form>

         </div>
 </div>
 </div>
        
<?php
if(isset($_POST['btnupdate'])){
  $movieid=$_POST['edit_movie_id'];
  $moviename=$_POST['edit_movie_name'];
  $movietrlurl=$_POST['edit_movie_trl_url'];
  $movietime=$_POST['edit_movie_time'];

  $movieimage=$_FILES['edit_movie_image']['name'];
  $movieimagetmp=$_FILES['edit_movie_image']['tmpname'];
  move_uploaded_file($movieimagetmp,$movieimage);

  $movie_edited=mysqli_query($con,"update  tbladdmovie set movie_name='$moviename', movie_image='$movieimage', movie_trl_url='$movietrlurl', movie_time='$movietime' where  movie_id='$editmovieid'");
                 
  if($movie_edited>0){

    echo "
     <script>
     window.location.assign('viewmovie.php');
     </script>
     ";
  }


}
?>


<?php
include 'adf.php';
?>