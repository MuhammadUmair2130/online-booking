
<?php
include 'config.php';
include 'adh.php';
?>

<!-- must include this file in every page for page title  -->

<div class="page-content">
        <div class="page-header">
          <div class="container-fluid my-3">
            <h2 class="h5 no-margin-bottom">select languages</h2>
          </div>
        </div>
        

<!-- must include this file in every page for page title  -->
    
    <div class="col-lg-12 ">
    <div class="block">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h4 mb-0">languages available </h3>
                  </div>
                  <div class="card-body pt-0">
                    <p class="text-sm">Select language genre as you you like.</p>
                    <form method="post">
                      <div class="mb-3">
                        <label class="form-label" >Enter language</label>
                        <input class="form-control" name="language"  type="text" required >
                        
                        <input type="submit" class="btn btn-danger mt-3" name="btnlanguage" >   

                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
              </div>
         

            <?php
            if(isset($_POST['btnlanguage'])){
                $language=$_POST['language'];
                $insert=mysqli_query($con,"insert into tbllanguage values('null','$language')");

            }
            ?>

            <div class="col-lg-12">
              <div class="block">
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>language</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    

                      <?php
                      $select=mysqli_query($con,"select * from tbllanguage");
                      foreach($select as $data){
                        echo "
                        <tbody>
                        <tr>
                                <td>$data[language_id]</td>
                                <td>$data[language]</td>
                                <td>
                                <a href='langdel.php?A=$data[language_id]' class='btn btn-danger'>Delete</a>
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