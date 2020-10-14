<?php
require_once("config.php");


if(isset($_POST["chng"]))


{


   $custid=$_SESSION["custid"];

   

    $opass=$_POST["opass"];
    
    $npass=$_POST["npass"];
    
    $cpass=$_POST["cpass"];

    $sel="select password from customer where custid='$custid'";


    $ex=$con->query($sel);


    $fet=$ex->fetch_array();

    $p=$fet["password"];


    if($p==$opass && $npass==$cpass)

    {

     $upd="update customer set password='$npass' where custid='$custid'";

     $ex=$con->query($upd);


     
     echo "<script>
     alert('Your Password succefully changed !')
 
 
     window.location='index.php';
     
     
     
     
     </script>";
 




    }


    else
    {


        
     echo "<script>
     alert('Opass password, New Password and confirm password does not matched Try again!')
 
 
     window.location='changepassword.php';
     
     
     
     
     </script>";
 

    }

}

?>



<!DOCTYPE html>
<html lang="en" >

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
   

    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>


      body

      {

        background-image: url('images/log.jpg');

        background-attachment: fixed;

        background-size: cover;
      }
     
      .container
      {
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin-top: 7%;
        position: absolute;
        top: 50px;
        color: white;
        max-width: 100% !important;

      }

      
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <!-- particles.js container -->
<div id="particles-js">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-lg-3">&nbsp;</div>
      <div class="col-sm-8 col-lg-6">
          <form class="form-signin" method="POST">
  
              <h1 class="h3 mb-3 font-weight-normal"><center>Change Your Password</center></h1>
            
              <h5 id="show-error1"></h5><label for="inputPassword" class="sr-only">Enter Old Password</label>
              <input type="password" id="password" class="form-control mb-3" name="opass" placeholder="Old Password" required><h5 id="show-error1">
                  
              <label for="inputPassword" class="sr-only">Enter New Password</label>
              <input type="password" id="password" class="form-control mb-3" name="npass" placeholder="New Password" required><h5 id="show-error1">



              <label for="inputPassword" class="sr-only">Enter Confirm Password</label>
              <input type="password" id="password" class="form-control mb-3" name="cpass" placeholder="Confirm Password" required><h5 id="show-error1">
            
            
            
            </h5>
             


              <br>

              <button class="btn btn-lg btn-primary btn-block" type="submit"  name="chng">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- particles.js lib (JavaScript CodePen settings): https://github.com/VincentGarreau/particles.js -->

<script src="js/jquery.js"></script>

<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>


    <script  src="js/index.js"></script>

    

    <script>
      $(document).ready(function () {
        $('#show-error').hide();
        $('#show-error1').hide();
        var email_err = true;
        var pass_err = true;
  
        $('#email').keyup(function () {
          email_check();
        });
  
        function email_check() {
          var email_val = $('#email').val();
          var regex = /^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-z]{2,6}$/;
  
          if (!(email_val.match(regex))) {
            $('#show-error').show();
            $('#show-error').html("**Provide Valid Email");
            $('#show-error').focus();
            $('#show-error').css("color", "white");
            email_err = false;
            return false;
          }
          else {
            $('#show-error').hide();
          }
        }
        
        $('#password').keyup(function () {
          password_check();
        });
  
        function password_check() {
          var pass_val = $('#password').val();
  
          if (pass_val.length == '') {
            $('#show-error1').show();
            $('#show-error1').html("**Please Fill the Password");
            $('#show-error1').focus();
            $('#show-error1').css("color", "white");
            password_err = false;
            return false;
          }
          else {
            $('#show-error1').hide();
          }
        }
        $('#submit').click(function () {
           email_err = true;
           pass_err = true;
           email_check();
           password_check();
           
  
           if(( email_err == true ) && ( pass_err == true)){
             return true;
           }
           else{
             return false;
           }
        });
 
    </script>


</body>

</html>
