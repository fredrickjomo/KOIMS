<?php
ob_start();
session_start();
include_once '../DbConnect.php';
$error=false;

if(isset($_POST['sign_up'])){
    $Firstname=$_POST['first_name'];
    $Lastname=$_POST['last_name'];
    $Idno=$_POST['id_no'];
    $Age=$_POST['age'];
    $Gender=$_POST['gender'];
    $Nationality=$_POST['nationality'];
    $County=$_POST['county'];
    $Email=$_POST['email'];
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    $ConfirmPassword=$_POST['confirm_password'];
    //$ProfilePhoto=$conn->real_escape_string('image/'.$_FILES['profile_photo']['name']);
   
    $sql="insert into users(first_name,last_name,id_number,age,gender,nationality,county,email_address,username,password)values('$Firstname','$Lastname','$Idno','$Age','$Gender','$Nationality','$County','$Email','$Username','$Password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Successfully Registered an account')</script>";
    }
    else{
        echo "<script>alert('Error:.'$sql'<br>.mysqli_error(%conn)')</script>";
        echo "Error:".$sql."<br>".  mysqli_error($conn);        
    }
    mysqli_close($conn);
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/sign_up.css">
       <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../scripts/jquery-3.2.1.js"></script>
      <!--<script src="main.js"></script>-->

    <title>Register New Account</title>
  </head>
  <body><h2 class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">THE KENYA ORPHANS' HOMES</h2>
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>Menu
  </button>

          
          
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
          <a class="nav-link" href="../index"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../pages/about_us"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="../pages/orphanages"><i class="fa fa-child" aria-hidden="true"></i> Orphanages</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Sponsorship</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Adoption</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../pages/donate">Donation</a>
             <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Charity Event(s)</a>
        </div>
       
      </li>
        <li class="nav-item">
        <a class="nav-link" href="../pages/contact_us"><i class="fa fa-phone" aria-hidden="true"></i> Contact US</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../pages/donate"><i class="fa fa-heart-o" aria-hidden="true"></i> Donate</a>
      </li>
        <li class="nav-item">
        <a class="nav-link active" href="../pages/login"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Orphanage" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      
      <!--login page starts here-->
      <div class="container">
      <div class="row">
          <div class="col-1">
         
          </div>
           <div class="col-8">
               <h1>Member Registration:</h1>
            
            <hr>
            <h3>Register in the form below</h3>
            <p>Fill in all the fields below before you submit</p>
               <div class="row">
               <div class="col-4 column1">
                   <form action="../pages/sign_up" method="POST">
  <div class="form-group">
    <label for="firstNamefield">First Name:</label>
    <input type="text" class="form-control" name="first_name" id="lastNamefield" aria-describedby="firstname" placeholder="Enter First Name">
      
      <label for="lastNamefield">Last Name:</label>
      <input type="text" class="form-control" name="last_name" id="firstNamefield" aria-describedby="lastname" placeholder="Enter Last Name">
      
    <label for="IDnofield">Identification Number:</label>
    <input type="number" class="form-control" name="id_no" id="IDnofield" aria-describedby="idno" placeholder="Enter National ID no.">
      
      <label for="age">Age:</label>
      <input type="number" class="form-control" name="age" id="IDnofield" aria-describedby="age" placeholder="Age(above 18yrs)">
       
      <label for="Gender">Gender:</label>
    <select class="form-control" name="gender" id="Gender">
        <option>---Select Gender---</option>
      <option>Male</option>
      <option>Female</option>
    </select>
     <label for="Nationality">Nationality:</label>
     <select class="form-control" name="nationality" id="Nationality">
        <option>---Select Nationality---</option>
      <option>Kenya</option>
      <option>Tanzania</option>
    </select>
    
  </div>
   
  

                   </div>
               <div class="col-4 column2">
                   <div class="form-group">
                       <label for="county">County:</label>
                       <select class="form-control" name="county" id="county">
        <option>---Select County ---</option>
      <option>Nakuu</option>
      <option>Kisii</option>
    </select>
      
                       <label for="InputEmail1">Email address</label>
                       <input type="email" class="form-control" name="email" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                       
                  
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Create Username">
                       
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                       
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password"id="confirmpassword" placeholder="Confirm Password">
                       
                  <label for="profile_photo">Upload Photo</label> 
                       <input type="file" class="form-control" name="profile_photo" value="Upload Photo">
      
                   </div>
                   </div>
                   </div>
            <input type="submit" class="btn btn-primary" value="Submit" name="sign_up">
               </form>
        </div>
       
        
                
          </div>
      </div>
          <div class="container-fluid " id="copyright">&COPY;2018-Kenya Orphanage Information Management System</div>
          
         
      
      
   
       <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../scripts/jquery-3.2.1.js"></script>
      <script src="../Bootstrap/jquery/jquery.min.js"></script>
       </body>
   
</html>