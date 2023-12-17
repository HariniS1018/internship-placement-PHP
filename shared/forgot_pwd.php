<?php

include_once "connection.php";

$uid = $_POST['uid'];
$npass = $_POST['npass'];

$enc_pass = md5($npass);
echo $enc_pass."<br>";

$sql_query = "update security set password = '$enc_pass' where userid = '$uid'";
mysqli_query($conn, $sql_query);

if(mysqli_affected_rows($conn) >0){
    echo "New Password Updation successful";
}
else{
    echo "New Password Updation unsuccessful";
}
mysqli_close($conn);
?>