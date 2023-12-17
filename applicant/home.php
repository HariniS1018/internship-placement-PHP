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
            height: 200px;
        }
        .price{
            font-size:24px;
            color:violet;
        }
    </style>
</head>
<body>
</body>
</html>
<?php

include "authguard.php";
include "menu.html";
include_once "../shared/connection.php";

$userid=$_SESSION['userid'];
$sql_cursor=mysqli_query($conn,"select * from interview_details");

while($row=mysqli_fetch_assoc($sql_cursor)){

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
                <div class='card-title'><b>$Cname from $StartDate for $duration</b></div>
                <div class='mt-1 card-text'>interview @$In_time on $In_date in $venue</div>
                <div class='mt-2 d-flex  gap-3 justify-content-evenly'>
                    <a href='view_applied.php?jobID=$jobID'>
                        <button class='btn btn-danger'>Apply</button> 
                    </a>   
                </div>
            </div>
        </div>";
}
?>