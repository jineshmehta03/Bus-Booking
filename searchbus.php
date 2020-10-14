<?php


require_once("config.php");



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
  opacity: 0.6;
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





<br><br><br>


<div class="container">
  <div class="row">
     <div class="col-lg-12 jm fa-hover">
<h2 align="center">Search Buses Result</h2>




<?php

if(isset($_REQUEST["ser"]))

{

$from=$_POST["frm"];

$to=$_POST["to"];

 $sel="select * from addbus where frmm='$from'  && too='$to'";

$ex=$con->query($sel);


while($fet=$ex->fetch_array())

{




?>

<center>
<div class="col-lg-4"  style="margin:0px;  padding:4px">
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

</center>
<?php
}

}


else
{


?>






<div class="col-lg-4"  style="margin:0px;  padding:4px">
        <div class="card" style="background-color:#9690b5; color:white; margin-top: 5px; padding:4px">

<h4 align="center" style="color:#050404"><b>There is No Buses Found in this Date or Place</b></h4>



</div>



<?php

}


?>

</div>
</div>
<br><br>












</div>

</div>

</div>


<br><br><br><br>






</body>
</html>