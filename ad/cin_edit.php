<?php
include 'config.php';
include 'adh.php';
?>

<?php
$cinemaid=$_GET['A'];
$select=mysqli_query($con,"select * from tblcinema where cinema_id='$cinemaid'");
foreach($select as $data){

}
?>

<section>
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid ">
            <h2 class="h5 no-margin-bottom">Add & View Cinema</h2>

            <div class="col-lg-12 ">
        <form method="post" enctype="multipart/form-data">
  <div class="form-group">
  <input type="hidden" name="cinema_id" value="<?php echo $cinemaid?>">
    <label for="exampleInputEmail1">Enter cinema name</label>
    <input type="text" name="cinema_name" class="form-control" value="<?php echo $data['cinema_name']?>"   placeholder="Enter cinema name">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Enter cinema location</label>
    <input type="text" name="cinema_location" class="form-control" value="<?php echo $data['cinema_location']?>" placeholder="Enter cinema location">
    
  </div>
  
  <button type="submit" name="btnupdate" class="btn btn-primary mt-3">update</button>
</form>
</div>   

          </div>
        </div>



        
        
 </div>
       
 <?php
 if(isset($_POST['btnupdate']))
 {
  $cinemaname=$_POST['cinema_name'];
  $cinemalocation=$_POST['cinema_location'];
  $update=mysqli_query($con,"update tblcinema set cinema_name='$cinemaname',cinema_location='$cinemalocation' where cinema_id='$cinemaid'");
  if($update>0){
    echo "<script>window.location.assign('cinema.php')</script>";

  }
  else{
    echo"something went wrong";
  }

 }
 ?>
  
 <div class="container">
 <div class="log-lg-12">
  <table class="table table-dark table-striped table-hover">
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
       <a href='cin_del.php?A=$data[cinema_id]'  <button class='btn btn-success'> delete </button> </a>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href='cin_edit.php?A=$data[cinema_id]'  <button class='btn btn-warning'> edit </button> </a>  
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
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
