<?php

$conn = new mysqli("localhost","root","root","AU");

if($conn->connect_error){
    echo "Error in sql connection";
    die;
}

?>