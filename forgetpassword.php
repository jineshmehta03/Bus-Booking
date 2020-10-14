<?php
require_once("config.php");


if(isset($_POST["frg"]))


{



    $em=$_POST["em"];



    $sel="select password from  customer where email='$em'";


    $ex=$con->query($sel);

    $no=$ex->num_rows;


    $fet=$ex->fetch_array();


     $p=$fet["password"];

    if($no > 0) 



    {


     echo "<script>
     alert('Your Password are :' + $p)
 
 
     window.location='Login.php';
     
     
     
     
     </script>";
 


    }



    else



    {


        echo "<script>
        alert('Your Email does Not exist Try again')
    
    
        window.location='forgetpassword.php';
        
        
        
        
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
  
              <h1 class="h3 mb-3 font-weight-normal"><center>Forget Password</center></h1>
              <input type="email" id="email" class="form-control mb-3"  name="em" placeholder="Email address" autocomplete="off" required autofocus>
              
              <div class="checkbox mb-3">
              

              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit"  name="frg">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- particles.js lib (JavaScript CodePen settings): https://github.com/VincentGarreau/particles.js -->

<script src="js/jquery.js"></script>

<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>


    <script  src="js/index.js"></script>

    

</body>

</html>
