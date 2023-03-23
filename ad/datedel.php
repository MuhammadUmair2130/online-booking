<?php
include 'config.php';

$dateid=$_GET['A'];
$delete=mysqli_query($con,"delete from tbldate where date_id='$dateid'");
if($delete>0){
    echo "<script>window.location.assign('date.php')</script>";

}
else{
    echo "<script>alert('something went wrong')</script>";
}


?>