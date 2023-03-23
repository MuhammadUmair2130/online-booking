<?php
include 'config.php';

$languageid=$_GET['A'];
$delete=mysqli_query($con,"delete from tbllanguage where language_id='$languageid'");
if($delete>0){
    echo "<script>window.location.assign('language.php')</script>";

}
else{
    echo "<script>alert('something went wrong')</script>";
}


?>