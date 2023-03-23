<?php
include 'config.php';

$industryid=$_GET['A'];
$delete=mysqli_query($con,"delete from tblindustry where industry_id='$industryid'");
if($delete>0){
    echo "<script>window.location.assign('industry.php')</script>";

}
else{
    echo "<script>alert('something went wrong')</script>";
}


?>