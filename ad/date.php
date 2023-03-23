<?php
include 'config.php';
include 'adh.php';
?>

<!-- must include this file in every page for page title  -->

<div class="page-content">
        <div class="page-header">
          <div class="container-fluid my-3">
            <h2 class="h5 no-margin-bottom">Add & View Cinema Dates</h2>
          </div>
        </div>
        

<!-- must include this file in every page for page title  -->
    
    <div class="col-lg-12 ">
    <div class="block">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h4 mb-0">Cinema date Available</h3>
                  </div>
                  <div class="card-body pt-0">
                    <p class="text-sm">Select Date as you want.</p>
                    <form method="post">
                      <div class="mb-3">
                        <label class="form-label" for="exampleInputEmail1">Enter Date</label>
                        <input class="form-control" name="cinema_date"  type="date" required >
                        
                        <input type="submit" class="btn btn-danger mt-3" name="btndate" >   

                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
              </div>
         

            <?php
            if(isset($_POST['btndate'])){
                $cinemadate=$_POST['cinema_date'];
                $insert=mysqli_query($con,"insert into tbldate values('null','$cinemadate')");

            }
            ?>

            <div class="col-lg-12">
              <div class="block">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>cinema date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $select=mysqli_query($con,"select * from tbldate");
                      foreach($select as $data){
                        echo "<tr>
                                <td>$data[date_id]</td>
                                <td>$data[cinema_date]</td>
                                <td>
                                <a href='datedel.php?A=$data[date_id]' class='btn btn-warning'>Delete</a>
                                </td>                        
                            </tr>";
                        
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


<?php
include 'adf.php';
?>