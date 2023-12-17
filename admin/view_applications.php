<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card{
            width:300px;            
            display:inline-block !important;
            margin:10px;
        }
        .pdtimg-container{
            width:100%;            
        }
        .pdtimg{
            width:100%;
        }
        .price{
            font-size:24px;
            color:violet;
        }
    </style>
</head>
<body></body>
</html>

<?php

include "authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];

include_once "../shared/connection.php";

$sql_cursor=mysqli_query($conn,"select * from applications join interview_details on applications.jobID=interview_details.jobID where uploaded_by=$userid");

while($row=mysqli_fetch_assoc($sql_cursor)){

    $userid = $row['userid'];
    $applicationid = $row['applicationID'];
    $jobID = $row['jobID'];
    $dname = $row['dname'];
    $Cname = $row['Cname'];
    $domain = $row['domain'];
    $job_type = $row['job_type'];
    $StartDate = $row['StartDate'];
    $duration = $row['duration'];
    $venue = $row['venue'];
    $In_date = $row['In_date'];
    $In_time = $row['In_time'];
    $impath=$row['impath'];

    echo "<div class='card'>
            <div class='card-body'>
                <div class='pdtimg-container'>
                    <img class='pdtimg' src='$impath'>
                </div>
                <h6 class='price'>$domain - $job_type</h6>
                <h6 class='price'>Student ID: $userid</h6>
                <h6 class='price'>application ID: $applicationid</h6>
                <div class='card-title'><b>$Cname from $StartDate for $duration</b></div>
                <div class='mt-1 card-text'>interview @$In_time on $In_date in $venue</div>
            </div>
        </div>";
}