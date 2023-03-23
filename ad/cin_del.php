<?php
include 'config.php';

$cinemaid=$_GET['A'];
$delete=mysqli_query($con,"delete from tblcinema where cinema_id='$cinemaid'");
if($delete>0){
    echo "<script>window.location.assign('cinema.php')</script>";

}
else{
    echo "<script>alert('something went wrong')</script>";
}


?>