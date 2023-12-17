<?php

include_once "connection.php";

$uid = $_POST['uid'];
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$enc_pass = md5($upass);
$utype = $_POST['utype'];

$status = mysqli_query($conn,"insert into security(userid,user_name,password,user_type) values('$uid','$uname','$enc_pass','$utype')");

if($status){
    echo "Registeration successful";
}
else{
    echo "<h1>Registeration Failed</h1>";
    echo mysqli_error($conn);
}

?>