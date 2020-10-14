
<?php
require_once("config.php");


if(isset($_POST["sub"]))


{
   

     $fname=$_POST["fname"];
     
     $lname=$_POST["lname"];
     
     $mob=$_POST["mob"];
     
     $em=$_POST["em"];
     
     $pass=$_POST["pass"];
     
     $cpass=$_POST["cpass"];


     if($pass==$cpass)


     {



     $insert="insert into customer(firstname,lastname,mobile,email,password)values('$fname','$lname','$mob','$em','$pass')";


     $ex=$con->query($insert);


     echo "<script>
     alert('Your Account Created Succefully')


     window.location='Login.php';
     
     
     
     
     </script>";



}


else

{


    echo "<script>
    alert('Password does not Matched try Again')


    window.location='Register.php';
    
    
    
    
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
        position: absolute;
        top: 60px;
        color: white;
        max-width: 100% !important;

      }

      
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="overflow-y: hidden">

  <!-- particles.js container -->
<div id="particles-js">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-lg-3">&nbsp;</div>
      <div class="col-sm-8 col-lg-6">
          <form class="form-signin" method="POST">
              <h1 class="h3 mb-3 font-weight-normal"><center>Please sign in</center> </h1>
              <input type="text" id="username" class="form-control mb-3" name="fname" placeholder="First Name" autocomplete="off" required> <h6 id="show-error"> </h6>
              <input type="text" id="lastname" class="form-control mb-3" name="lname" placeholder="Last Name" autocomplete="off" required> <h6 id="show-error1"> </h6>
              <input type="number" id="number" class="form-control mb-3"  name="mob" placeholder="Mobile No." required>  <h6 id="show-error2"> </h6>
              <input type="email" id="email" class="form-control mb-3"  name="em" placeholder="Email address" autocomplete="off" required autofocus><h6 id="show-error3"> </h6>
               <label for="inputPassword" class="sr-only">Password</label >
              <input type="password" id="password" class="form-control mb-3" name="pass" placeholder="Password" required> <h6 id="show-error4"> </h6>
              <input type="password" id="cpassword" class="form-control mb-3" name="cpass" placeholder="Confirm Password" required> <h6 id="show-error5"> </h6>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="sub">Create An Account Here >></button>
              <p class="mt-5 mb-3">&copy; 2017-2018</p>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- particles.js lib (JavaScript CodePen settings): https://github.com/VincentGarreau/particles.js -->
  <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script  src="js/index.js"></script>


    <script>
      $(document).ready(function () {
        $('#show-error').hide();
        $('#show-error1').hide();
        $('#show-error2').hide();
        $('#show-error3').hide();
        $('#show-error4').hide();
        $('#show-error5').hide();
        
        var user_err = true;
        var lass_err = true;
        var contact_err = true;
        var email_err = true;
        var pass_err = true;
        var cpass_err = true;
        
  
        //username
        $('#username').keyup(function () {
          username_check();
        });
  
        function username_check() {
          var user_val = $('#username').val();
  
          if (user_val.length == '') {
            $('#show-error').show();
            $('#show-error').html("**Please Fill the Username");
            $('#show-error').focus();
            $('#show-error').css("color", "white");
            user_err = false;
            return false;
          }
          else {
            $('#show-error').hide();
          }
        }

        //lastname
        $('#lastname').keyup(function () {
          lastname_check();
        });
  
        function lastname_check() {
          var las_val = $('#lastname').val();
  
          if (las_val.length == '') {
            $('#show-error1').show();
            $('#show-error1').html("**Please Fill the Lastname");
            $('#show-error1').focus();
            $('#show-error1').css("color", "white");
            lass_err = false;
            return false;
          }
          else {
            $('#show-error1').hide();
          }
        }
  
        //mobile number
        $('#number').keyup(function () {
          number_check();
        });
        function number_check() {
          var number_val = $('#number').val();
          var regnum = /^[6-9][0-9]{9}/;
          if (!(number_val.match(regnum))) {
            $('#show-error2').show();
            $('#show-error2').html("**Provide Valid Contact Number");
            $('#show-error2').focus();
            $('#show-error2').css("color", "white");
            contact_err = false;
            return false;
          }
          if ((number_val.length < 10) || (number_val.length > 10)) {
            $('#show-error2').show();
            $('#show-error2').html("**Provide 10 Digit Number");
            $('#show-error2').focus();
            $('#show-error2').css("color", "white");
            contact_err = false;
            return false;
          }
          else {
            $('#show-error2').hide();
          }
        }

        //email
        $('#email').keyup(function () {
          email_check();
        });
  
        function email_check() {
          var email_val = $('#email').val();
          var regex = /^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-z]{2,6}$/;
  
          if (!(email_val.match(regex))) {
            $('#show-error3').show();
            $('#show-error3').html("**Provide Valid Email");
            $('#show-error3').focus();
            $('#show-error3').css("color", "white");
            email_err = false;
            return false;
          }
          else {
            $('#show-error3').hide();
          }
        }
  

        //password
        $('#password').keyup(function () {
          password_check();
        });
  
        function password_check() {
          var pass_val = $('#password').val();
  
          if (pass_val.length == '') {
            $('#show-error4').show();
            $('#show-error4').html("**Please Fill the Password");
            $('#show-error4').focus();
            $('#show-error4').css("color", "white");
            password_err = false;
            return false;
          }
          else {
            $('#show-error4').hide();
          }
        }






        //cpassword
        
        
        $('#cpassword').keyup(function () {
          cpassword_check();
        });
  
        function cpassword_check() {
          var pass_val = $('#cpassword').val();
  
          if (pass_val.length == '') {
            $('#show-error5').show();
            $('#show-error5').html("**Please Retype the Password");
            $('#show-error5').focus();
            $('#show-error5').css("color", "white");
            cpassword_err = false;
            return false;
          
          }
          else {
            $('#show-error5').hide();
          }
        }
  

  
        $('#submit').click(function () {
           user_err = true;
           last_err = true;
           number_err = true;
           email_err = true;
           pass_err = true;
           cpass_err = true;
           
           
           username_check();
           lastname_check();
           number_check();
           email_check();
           password_check();
           cpassword_check();
           
  
           if(( user_err == true) && ( last_err == true) && (number_err == true) && ( email_err == true ) && ( pass_err == true)  && ( cpass_err == true ) ){
             return true;
           }
           else{
             return false;
           }
        });
      });  
        
    </script>

</body>

</html>
