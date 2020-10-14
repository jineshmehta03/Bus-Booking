<?php


require_once("config.php");


//help contact form 


if(isset($_POST["hlp"]))


{
   

     $name=$_POST["name"];
     
     
     $em=$_POST["em"];
     
     $msg=$_POST["msg"];
     


 $insert="insert into help(name,email,comment)values('$name','$em','$msg')"; 


     $ex=$con->query($insert);


     echo "<script>
     alert('Thanks for Contact with Us We will Touch with You Soon !')


     window.location='index.php';
     
     
     
     
     </script>";



}



?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
 
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 







<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
  <link rel="icon" href="images/Bus icon.jpg" type="text/icon">


  <style type="text/css">


.brand{
  color: white;
  text-align: center;
}

.main{
  position: absolute;
  top:300px;
  left:450px;
}

.main .fa
{
  display: inline-block;
  background-color: white;
}

.card1
{
  display:inline-block;
  position: absolute;
  left:16%;
  margin: 30px;
}

.card2
{
  display: inline-block;
  position: absolute;
  left:38%;
  margin: 30px;
}

.card3
{
  display: inline-block;
  position: absolute;
  left:58%;
  margin: 30px;
}

.contact
{
position: absolute;
left:75%;
top:20%;
}

.item
{
  position: absolute;
  left:44%;
  top:20%;
  
  color: rgba(249,162,60, 0.98);
  font-family: 'KoHo', sans-serif;
  font-size: 300%;

}

.content
{
  position: absolute;
  left:70%;
  top:20%;


}

.op{
  opacity: 0.9;
  background-color:#0f0b26;
  color:white !important;
}

.ft
{
  padding: 5%;
  cursor: pointer;
  background-color:black;
  color: white;
}

#cta{
    /* background-color:#ff4c68;    */
    background-image: url(../images/cute-puppy.jpg);
    /* background:  url(../images/cute-puppy.jpg) rgba(255,76,104,0.5); */
    background-size:contain;
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    padding: 7% 15%;
    color: #fff;
    position: relative;
}

.overlay{
    /* background-color:rgba(255,76,104,0.5); */
    background: linear-gradient( rgba(255,56,104,0.15), rgba(55,76,50,1));
    position: absolute;
    height: 100%;
    width:100%;
    left:0;
    right:0;
    top:0;
    bottom:0;
}

.card
{
   box-shadow: 0px 0px 10px #000;
  
}

.cta-data{
    position: relative;
}




#cta h3{
    font-size: 2.5rem;
    line-height: 1.5;
    text-shadow: 4px 4px 6px #000;
}

.btn btn-outline-danger
{
  position: absolute;
  left:60%;
}

#example2 {
  border: 1px solid;
  padding: 5px;
  box-shadow: 0.1px 1px 20px red inset;
  color: rgba(25,225,225,325);

  margin-left:-6%;
}

.port{
  background-color: orange;
  border-radius: 30%; 

}

#blur{
	 filter: blur(3px);
}
.jm:hover{
  
  transition: 1s ease all;
}


.fa-hover:hover{
    
    transform: scale(1.05);
    cursor:pointer;
}


</style>

</head>
<body>


<?php
require_once("header.php");

?>
<!-- CAROUSEL END -->


<?php
require_once("slider.php");

?>

<!-- /.CAROUSEL END -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Need Help Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text"  name="name" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">E-Mail id:</label>
            <textarea class="form-control" name="em"  id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Comment:</label>
            <textarea class="form-control" name="msg" id="message-text"></textarea>
          </div>
       
      </div>
      <div class="modal-footer">
        <input type="submit"  name="hlp" class="btn btn-primary"  value="Send message">
      </div>


      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><cite style="background-color: rgba(63,122,191,0.7); padding: 5px">Pay With Paytm</cite></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>




      <!----login with paytm--->
    

      <?php

require_once("paytmlogin.php");


?>










<!-----login with phonpe--->


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><cite style="background-color: rgba(63,122,191,0.7); padding: 5px">Pay With Phone Pe</cite>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <?php

require_once("phonepelogin.php");


?>


      


<!-----login with paypal--->

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><cite style="background-color: rgba(63,122,191,0.7); padding: 5px">Pay With PayPal</cite></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      


    
    

    <?php

require_once("paypallogin.php");


?>















<div class="container">
  <div class="row">
     <div class="col-lg-4 jm fa-hover">
      <div class="card" style="margin-top: 10px;">
        <div class="text-center">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title>   
          <image xlink:href="https://images-na.ssl-images-amazon.com/images/I/5130SKxN22L.png" height="100px" width="100px"/>
        </svg>
         </div>
        <h2 class="text-center">Pay with Paytm</h2>
        <button type="button" class="btn btn-primary btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Pay</button>



</div> 
 </div><!-- /.col-lg-4 -->

    
      

      <div class="col-lg-4 jm fa-hover">
        <div class="card" style="margin-top: 10px;">
        	<center>
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title>
          <image xlink:href="https://cdn-images-1.medium.com/fit/c/200/200/1*tkgmeTTVBz7hsF8LzcapoA.png"  height="100px" width="100px"/>
        </svg>
        <h2 class="text-center">Pay with Phone Pe</h2>

    </center>
      
      <button type="button" class="btn btn-primary btn-outline-dark" data-toggle="modal" data-target="#exampleModal1" >Pay</button>
</div> 
</div><!-- /.col-lg-4 -->




      <div class="col-lg-4 jm fa-hover">
        <div class="card" style="margin-top: 10px;">

        	<center>
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title>
         <image xlink:href="https://d1ic4altzx8ueg.cloudfront.net/finder-us/wp-uploads/2015/07/Paypal-logo.jpg"  height="100px" width="100px" />
        </svg>
        <h2 class="text-center">Pay with Paypal</h2>

    </center>
         <button type="button" class="btn btn-primary btn-outline-dark" data-toggle="modal" data-target="#exampleModal2">Pay</button>



</div> 
</div>
       
</div>
</div>
</div>
</div>
</div>

       


<!--Box--->

<div id="grad1">
<div class="brand"><h1>Quick Bus</h1></div>
<div class="main">

<form method="post" action="searchbus.php">
  <span class="input-group-addon"></span>
  <input class="op" type="text" name="frm" placeholder="From" style="height:50px" required>
  <input class="op" type="text" name="to" placeholder="To" style="height:50px" required>
  <input class="op" type="date" name="date" style="height:50px" required>
  <input  type="submit" name="ser"  value="Search" style="height:50px;width: 100px">
</div>


</form>
</div>
</div>






 <section id="cta">
    <div class="overlay"></div>

    <div class="cta-data">
    <h3>We make you Travel</h3>
    
    
    
    
    <button type="button" class="btn btn-lg download-button btn-dark fa-hover" data-toggle="modal" data-target="#myApp"><i class="fab fa-apple"></i></i> Download</button>
    
    
    
    <button type="button" class="btn btn-lg download-button btn-outline-light fa-hover" data-toggle="modal" data-target="#myApp"><i class="fab fa-google-play"></i>Download</button>
    </div>

  </section>
  
  <br><br>
  <br>


  
  
<div class="container" style="background-color:#4b5b60; padding:25px; " >



<h3 align="center" style="color:#efe52b"><b>OUR TOP OPERATORS!</b></h3>
<br><br>

  <div class="row">

  

  <?php

$sel="select * from addbus";

$ex=$con->query($sel);

while($fet=$ex->fetch_array())

{

?>

<div class="col-lg-3"  style="margin:0px;  padding:4px">
        <div class="card" style="background-color:#9690b5; color:white; margin-top: 5px; padding:4px">

<h4 align="center" style="color:#050404"><b>Book Your Bus</b></h4>

<center>
<br>
<div class="thumbnail">

<img src="<?php echo $fet["busimage"];?>" style="width:100%; height:250px">
</div>
<br>  
<b><?php echo $fet["travelname"];?></b>
<br>


</span></button>
<br>


<p style="width:200px;"><button class="btn btn-lg btn-warning"><a href="Busbookingdetails.php?bid=<?php echo $fet["busid"];?>">Book Now </a></button></p>
</center>
</div>

</div>


<?php
}




?>


</div>
</div>
<br><br>
<hr style="width:100%; height:1px;  background-color:black">
  
<div class="container">



<h3 align="center"><span style="color:#c6ab51"><b>THE NUMBERS ARE GROWING!</b></span></h3>
<br><br>

  <div class="row">

  


<div class="col-lg-4 jm fa-hover">
        <div class="card">

<h4 align="center"><b>Customers</b></h4>

<center>

<button class="btn btn-lg btn-info"><span class="badge badge-info">


<?php

$sel="select count(custid) as total from customer";

$ex=$con->query($sel);

$fet=$ex->fetch_array();


echo "<b style='font-size:25px'>".$fet["total"]."</b>";


?>
</span></button>


<p style="width:300px"><b>Qiuck Bus is trusted by our happy customers globally</b></p>
</center>
</div>

</div>






<div class="col-lg-4 jm fa-hover">
        <div class="card">

<h4 align="center"><b>Operators</b></h4>

<center>

<button class="btn btn-lg btn-info"><span class="badge badge-info">


<?php

$sel="select count(busid) as total from addbus";

$ex=$con->query($sel);

$fet=$ex->fetch_array();


echo "<b style='font-size:25px'>".$fet["total"]."</b>";


?>
</span></button>


<p style="width:300px"><b>Network of over many buses operators worldwide</b></p>
</center>
</div>

</div>




<div class="col-lg-4 jm fa-hover">
        <div class="card">

<h4 align="center"><b>Bus Tickets</b></h4>

<center>

<button class="btn btn-lg btn-info"><span class="badge badge-info">


<?php

$sel="select count(bid) as total from booking";

$ex=$con->query($sel);

$fet=$ex->fetch_array();


echo "<b style='font-size:25px'>".$fet["total"]."</b>";


?>
</span></button>


<p style="width:300px"><b>Over many trips booked using quick bus</b></p>
</center>
</div>
<br>
<br>
<br>
</div>






<hr style="width:100%; height:1px;  background-color:black">




</div>
</div>

</div>

<?php
require_once("gallery and map.php");
?>

<br>
    


<?php

require_once("downloadapp.php");


?>
 
<?php
require_once("footer.php");

?>

</body>
</html>