<?php
ob_start();
session_start();
include_once '../DbConnect.php';



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
      <link rel="stylesheet" href="../css/login.css">
       <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../scripts/jquery-3.2.1.js"></script>
      <script src="../scripts/login.js"></script>
      <!--<script src="main.js"></script>-->

    <title>Kenya Orphanage Information Management System</title>
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
           <div class="col-9">
          
        <h1>Member Login:</h1>
               <img src="../images/login_page_images/login-icon-png-27.png">
        <form action="../pages/login" method="post">
  <div class="form-group">
    <label for="username" class="labels">Username</label>
    <input type="text" class="form-control" id="input" placeholder="" required>
      <label for="password" class="labels">Password</label>
    <input type="password"class="form-control" id="input" placeholder="" required>
  </div>
            <div class="btn-group" role="group" aria-label="buttons">
            <input type="submit" class="btn btn-primary" value="Sign In" name="sign_in">
                </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <form action="../pages/sign_up" method="post">
                <input type="submit" class="btn btn-dark" value="Sign Up" name="sign_up">
            </form>
            
            </div>
               <a href="../pages/password_recovery">Forgot Password?</a>
  
        
        
                
          </div>
          <div class="container-fluid " id="copyright">&COPY;2018-Kenya Orphanage Information Management System</div>
          
          
          </div>
      
      </div>
      
      
      
   
       <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../scripts/jquery-3.2.1.js"></script>
      <script src="../Bootstrap/jquery/jquery.min.js"></script>
       </body>
   
</html>