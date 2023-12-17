<?php

include "authguard.php";

$userid=$_SESSION['userid'];
// echo $_GET['jobID'];
$jobID=$_GET['jobID'];
// echo "$jobID";

include_once "../shared/connection.php";

$status=mysqli_query($conn,"insert into applications(jobID,userid) values($jobID,$userid)");
if($status){
    header("location:home.php");
}
else{
    echo mysqli_error($conn);
}
?>