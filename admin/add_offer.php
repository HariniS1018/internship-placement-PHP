<?php

include "authguard.php";
// session_start();

// $jobID = $_POST['jobID'];
$dname = $_POST['dname'];
$cname = $_POST['cname'];
$domain = $_POST['domain'];
$JT = $_POST['JT'];
$JStart = $_POST['JStart'];
$Jdurat = $_POST['Jdurat'];
$venue = $_POST['venue'];
$date = $_POST['date'];
$time = $_POST['time'];

$dest_file_path = "../shared/images/".$_FILES['dimg']['name'];
$uploaded_by = $_SESSION['userid'];

move_uploaded_file($_FILES['dimg']['tmp_name'],$dest_file_path);

include_once "../shared/connection.php";
$status = mysqli_query($conn,"insert into interview_details(dname,Cname,domain,job_type,StartDate,duration,venue,In_date,In_time,impath,uploaded_by) values('$dname','$cname','$domain','$JT','$JStart','$Jdurat','$venue','$date','$time','$dest_file_path','$uploaded_by')");
if($status){
    echo "product uploaded successfully!";
    header("location:view_offers.php");
}
else{
    echo mysqli_error($conn);
}
?>