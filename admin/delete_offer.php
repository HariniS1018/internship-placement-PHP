<?php

$jobID=$_GET['jobID'];

include_once "../shared/connection.php";

$status=mysqli_query($conn,"delete from interview_details where jobID=$jobID");

if($status){
    header("location:view_offers.php");
}
else{
    echo mysqli_error($conn);
}

?>