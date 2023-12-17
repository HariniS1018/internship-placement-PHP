<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<?php

session_start();

if(!isset($_SESSION["login_status"])){
    echo "illegal attempt";
    die;
}
if($_SESSION["login_status"]== false){
    echo "Unauthorised attempt";
    die;
}
if($_SESSION['user_type'] != 'Admin'){
    echo "U 've no permission to access this resource";
    die;
}

$user_name = $_SESSION['user_name'];
$user_type = $_SESSION['user_type'];
$userid = $_SESSION['userid'];

echo "<div class='d-flex justify-content-evenly p-3 bg-secondary text-white'>
    <div>$user_name</div>
    <div>$user_type</div>
    <div>$userid</div>
</div>";
?>