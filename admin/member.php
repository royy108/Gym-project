<?php
require ('include/config.php');
// $conn=mysqli_connect("localhost","root","","gymdb");
if(isset($_POST["Submit"])){
  $firstname=$_POST["fname"];
  $lastname=$_POST["lname"];
  $email=$_POST["email"];
  // $mobile_no=$_POST["mobile"];
  $password=$_POST["password"];
  $state=$_POST["state"];
  $city=$_POST["city"];
  $address=$_POST["address"];
  
  $sql=" INSERT INTO `tbluser`(`fname`,`lname`,`email`,`mobile`,`password`,`state`,`city`,`address`)
         VALUES ('$firstname','$lastname','$email','42424','$password','$state','$city','$address')";
  
  if($dbh -> query($sql)){
       echo "<script>alert('Resgister Successfull..!!')</script>";
  }
  else{
    echo "<script>alert('Password is Wrong')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ce7e77912.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/member.css">
    <title>member</title>
</head>
<body>
          <div class="nav">
            <div class="back">
              <button onclick="history.back()">Go Back</button>
              <h1>Member</h1>
            </div>   
         </div>
            <form class="row" method="post" action="#">
                
                <div class="box">
                  <label class="control-label">First Name</label>
                  <input class="form-control" type="text" name="fname" id="fname" placeholder="Enter your fname">
                </div>

                 <div class="box">
                  <label class="control-label">Last  Name</label>
                  <input class="form-control" type="text" name="lname" id="lname" placeholder="Enter your lname">
                 </div>
                 <div class="box">
                  <label class="control-label">email</label>
                  <input class="email-control" type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="box">
                  <label class="control-label">Mobile no</label>
                  <input class="mobile-control" type="number" name="mobile" id="mobile" placeholder="Enter your mobile no.">
                 </div>
                 <div class="box">
                  <label class="control-label">Password</label>
                  <input class="password-control" type="text" name="password" id="password" placeholder="Enter your password ">
                 </div>
                 <div class="box">
                  <label class="control-label">State</label>
                  <input class="state-control" type="text" name="state" id="state" placeholder="Enter your state">
                 </div>
                 <div class="box">
                  <label class="control-label">City</label>
                  <input class="city-control" type="text" name="city" id="city" placeholder="Enter your City">
                 </div>
                 <div class="box">
                  <label class="control-label">Address</label>
                  <input class="address-control" type="text" name="address" id="address" placeholder="Enter your Address">
                 </div>
                 <div class="sub">
                  <input  class="sub-control" type="Submit" name="Submit" id="Submit" class="btn btn-primary" value="Submit">
                 </div>
            </form>
</body>
</html>