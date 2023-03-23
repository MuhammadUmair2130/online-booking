
<?php
include 'config.php';
include 'adh.php';
?>

<!-- must include this file in every page for page title  -->

<div class="page-content">
        <div class="page-header">
          <div class="container-fluid my-3">
            <h2 class="h5 no-margin-bottom">Add & View Movie genre</h2>
          </div>
        </div>
        

<!-- must include this file in every page for page title  -->
    
    <div class="col-lg-12 ">
    <div class="block">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h4 mb-0">Movie genre</h3>
                  </div>
                  <div class="card-body pt-0">
                    <p class="text-sm">Select Movie genre as you you like.</p>
                    <form method="post">
                      <div class="mb-3">
                        <label class="form-label" >Enter Movie Genre</label>
                        <div class="col-sm-9">
                        <select  class="form-control" name="genre_name">
                          <option disabled selected>Select</option>
                                       <option>Action/Adventure</option>
                                       <option>Animals</option>
                                       <option>Comedy</option>
                                       <option>Animation</option>
                                       <option>Biography</option>
                                       <option>Comedy</option>
                                       <option>Cooking</option>
                                       <option>Dance</option>
                                       <option>Documentary</option>
                                       <option>Drama</option>
                                       <option>Education</option>
                                       <option>Entertainment</option>
                                       <option>Family</option>
                                       <option>Fantasy</option>
                                       <option>History</option>
                                       <option>Horror</option>
                                       <option>Kids</option>
                                       <option>Politics</option>
                                       <option>Science Fiction</option>
                                       <option>Spanish</option>
                                       <option>Travel</option>
                                       <option>Mystery</option>
                          </select>
                        </div>                        
                        <input type="submit" class="btn btn-danger mt-3" name="btngenre" >   

                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
              </div>
         

            <?php
            if(isset($_POST['btngenre'])){
                $moviegenre=$_POST['genre_name'];
                $insert=mysqli_query($con,"insert into tblgenre values('null','$moviegenre')");

            }
            ?>

            <div class="col-lg-12">
              <div class="block">
                <div class="table-responsive">
                  <table class="table table-stripped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Movie Genre</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    

                      <?php
                      $select=mysqli_query($con,"select * from tblgenre");
                      foreach($select as $data){
                        echo "
                        <tbody>
                        <tr>
                                <td>$data[genre_id]</td>
                                <td>$data[genre_name]</td>
                                <td>
                                <a href='genredel.php?A=$data[genre_id]' class='btn btn-danger'>Delete</a>
                                </td>                        
                            </tr>
                            </tbody>";
                        
                      }
                      ?>
                    
                  </table>
                </div>
              </div>
            </div>


<?php
include 'adf.php';
?>