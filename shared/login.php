<?php

session_start();
$_SESSION["login_status"] = false;

include_once "connection.php";

$uid = $_POST['uid'];
$upass = $_POST['upass'];

$enc_pass = md5($upass);
// echo $enc_pass."<br>";

$sql_query = mysqli_query($conn,"select *from security where userid = '$uid' and password = '$enc_pass'");

$total_rows = mysqli_num_rows($sql_query);

if($total_rows == 0){
    echo "login unsuccessful";
}
else{
    echo "login successful";
    $row = mysqli_fetch_assoc($sql_query);
    // print_r($row);
    $user_type = $row['user_type'];
    $user_name = $row['user_name'];
    $userid = $row['userid'];

    if($user_type == "Admin"){
        $_SESSION["login_status"] = true;
        $_SESSION["user_type"] = $user_type;
        $_SESSION["user_name"] = $user_name;
        $_SESSION["userid"] = $userid;

        header("location:../Admin/home.php");
    }
    else if($user_type == "Applicant"){
        $_SESSION["login_status"] = true;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['userid'] = $userid;
        
        header("location:../Applicant/home.php");
    }
}
?>