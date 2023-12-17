<?php
include "authguard.php";
include_once "../shared/connection.php";

$jobID=$_GET['jobID'];
$changein=$_GET['changein'];
$changedto=$_GET['changedto'];

$status=mysqli_query($conn,"update interview_details set $changein = '$changedto' where jobID=$jobID");

if($status){
    header("location:view_offers.php");
}
else{
    echo mysqli_error($conn);
}

?>
