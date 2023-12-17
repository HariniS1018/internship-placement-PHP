<?php
include_once "authguard.php";
include "menu.html";
?>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div><br></div>
    <div class="d-flex justify-content-center vh-75 align-items-center">
        <form action="add_offer.php" class="bg-light p-4" method="post" enctype="multipart/form-data">
            <div class="text-center">
                <h4>Add a new offer here...</h4>
            </div>
            <hr>
            <table>
                <tr><h1>FILL IN THE DETAILS</h1></tr>
            
                <hr>
                
                <tr><td><label for="dname">department name</label></td>
                <td><input type="text" id="dname" name="dname" required/></td></tr>
            
                <tr><td><label for="cname">company name</label></td>
                <td><input type="text" id="cname" name="cname" required/></td></tr>
            
                <tr><td><label for="domain">Domain</label></td>
                <td><input type="text" id="domain" name="domain" required/></td></tr>

                <tr>
                    <td><label for=JT class="form-conrtol mt-2">Job type</label></td>
                    <td><select required class="form-conrtol mt-2" name="JT">
                    <option value="placement" >placement</option>
                    <option value="internship">internship</option>
                    </select></td>
                </tr>
            
                <tr><td><label for="JStart">Job Start date</label></td>
                <td><input type="date" id="JStart" name="JStart"/></td>
            
                <tr><td><label for="Jdurat">Job duration</label></td>
                <td><input type="text" id="Jdurat" name="Jdurat"/></td>
            
                <tr><td><label for="venue">Interview venue:</label></td>
                <td><input type="text" id="venue" name="venue" required/></td>
            
                <tr><td><label for="date">Interview date</label></td>
                <td><input type="date" id="date" name="date" required/></td></tr>
                
                <tr><td><label for="time">Interview time</label></td>
                <td><input type="time" id="time" name="time" required/></td></tr>
            
                <tr>
                    <td><input type="file" name="dimg" placeholder="domain image" class="form-control mt-2"></td>
                </tr>
            </table>
            <div class="text-center mt-2 d-flex  gap-3 justify-content-evenly">
                <input class="btn btn-warning mt-3" type="submit" id="but" value="submit"/>
                <input class="btn btn-warning mt-3" type="reset" id="but" value="reset"/>
            </div>
        </form>
    </div>
</body>
</html>