

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
                    <h3 class="h4 mb-0">Industry</h3>
                  </div>
                  <div class="card-body pt-0">
                    <p class="text-sm">Select Industry genre as you you like.</p>
                    <form method="post">
                      <div class="mb-3">
                        <label class="form-label" >Enter Industry Name</label>
                        <input class="form-control" name="industry_name"  type="text" required >
                        
                        <input type="submit" class="btn btn-danger mt-3" name="btnindustry" >   

                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
              </div>
         

            <?php
            if(isset($_POST['btnindustry'])){
                $industryname=$_POST['industry_name'];
                $insert=mysqli_query($con,"insert into tblindustry values('null','$industryname')");

            }
            ?>

            <div class="col-lg-12">
              <div class="block">
                <div class="table-responsive">
                  <table class="table table-stripped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Industry name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    

                      <?php
                      $select=mysqli_query($con,"select * from tblindustry");
                      foreach($select as $data){
                        echo "
                        <tbody>
                        <tr>
                                <td>$data[industry_id]</td>
                                <td>$data[industry_name]</td>
                                <td>
                                <a href='industrydel.php?A=$data[industry_id]' class='btn btn-danger'>Delete</a>
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