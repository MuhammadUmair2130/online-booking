<?php
include 'config.php';
include 'adh.php';
?>


<!-- must include this file in every page for page title  -->

<section>
<div class="page-content">
        <div class="page-header mb-2">
          <div class="container-fluid ">
            <h2 class="h5 no-margin-bottom">Add & View Cinema</h2>

            <div class="col-lg-12 ">
        <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter cinema name</label>
    <input type="text" name="cinema_name" class="form-control  "   placeholder="Enter cinema name">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Enter cinema location</label>
    <input type="text" name="cinema_location" class="form-control "   placeholder="Enter cinema location">
    
  </div>
  
  <button type="submit" name="btncinema" class="btn btn-primary mt-3">Submit</button>
</form>
</div>

          </div>
        </div>
        <br><br>



       
 <?php
 if(isset($_POST['btncinema']))
 {
  $cinemaname=$_POST['cinema_name'];
  $cinemalocation=$_POST['cinema_location'];
  $insert=mysqli_query($con,"insert into   tblcinema values('null','$cinemaname','$cinemalocation')");
 }
 ?>
  
 <div class="container">
 <div class="log-lg-12">
  <table class="table table-dark table-striped table-hover table-responsive">
  <thead>
    <tr>
      <th>#</th>
      <th>cinema name</th>
      <th>cinema location</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $select=mysqli_query($con,"select * from tblcinema");
    foreach($select as $data){
      echo
       "
       <tr>
       <td>$data[cinema_id]</td>
       <td>$data[cinema_name]</td>
       <td>$data[cinema_location]</td>
       <td>
       <a href='cin_del.php?A=$data[cinema_id]' class='btn btn-success'> delete </a>
       <a href='cin_edit.php?A=$data[cinema_id]' class='btn btn-warning'> edit </a>  
            
       </td>
       </tr>
       
      
      ";

    }
    ?>



</tbody>
  </table>
 </div>
 </div>
</section>

<?php
include 'adf.php';
?>