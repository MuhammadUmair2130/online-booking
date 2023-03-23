<?php
include 'config.php';

$genreid=$_GET['A'];
$delete=mysqli_query($con,"delete from tblgenre where genre_id='$genreid'");
if($delete>0){
    echo "<script>window.location.assign('genre.php')</script>";

}
else{
    echo "<script>alert('something went wrong')</script>";
}


?>