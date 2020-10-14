<?php
error_reporting(0);

require_once("config.php");




// Merchant key here as provided by Payu
$MERCHANT_KEY = "LPijwDlb";

// Merchant Salt as provided by Payu
$SALT = "9puZCysDTu";

$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}



//add payment


if(isset($_REQUEST["addpayment"]))


{

  
  date_default_timezone_set("Asia/Calcutta");

$custid=$_SESSION["custid"];
$busid=$_REQUEST["busid"];
$bdate=date("d/m/y");
$btime=date("H:i:s a");

  $fname=$_REQUEST["firstname"];
  
   
  $lname=$_REQUEST["lastname"];
  
   
  $em=$_REQUEST["email"];
  
  $phone=$_REQUEST["phone"];


  
   
  $g=$_REQUEST["gender"];
  
   
  $add=$_REQUEST["address"];
  
   
$ins="insert into booking(custid,busid,bookingdate,bookingtime,firstname,lastname,email,phone,gender,address)values('$custid','$busid','$bdate','$btime','$fname','$lname','$em','$phone','$g','$add')";



  

  $ex=$con->query($ins);
    

 
  echo "<script>
  var hash = '<?php echo $hash ?>';

  function submitPayuForm() {
      if(hash == '') {
          return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
  }


  </script>";

  }





?>





  

<?php 
if(isset($_GET['amt'])){
    $Fees = 1;
    $total = 1;
}
if(isset($_GET['amt1'])){
    $Fees = 1;
    $total = 1;
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








<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
        if(hash == '') {
            return;
        }
        var payuForm = document.forms.payuForm;
        payuForm.submit();
    }
</script>


  
<style>


#trHide


{
    display:none;
}
td{ padding: 5px;font-size: 22px;}
input{font-size: 20px;}
</style>








<script>

function log()

{

alert('Please Login First Before Payment')


window.location='login.php';


}


</script>

</head>


<body onLoad="submitPayuForm()">


<?php
require_once("header.php");

?>




<?php

$custid=$_SESSION["custid"];

 $sel="select * from customer where custid='$custid'"; 

$ex=$con->query($sel);


$fet=$ex->fetch_array();


?>
<!-- CAROUSEL END -->
<div class="container">
<div class="col-lg-12">
<h3><b><span style="color:red">Book Your Ticket Here</b></span></h3>
<div class="row">
<br>
<br>



<div class="col-lg-6">
<h4><b><span style="color:blue">Fill Details</b></span></h4>


<?php if($formError) { ?>
	
  <span style="color:red">Please fill all mandatory fields.</span>
  <br/>
  <br/>
<?php } ?>

<form action="<?php echo $action; ?>" method="post" id="frm"  name="payuForm">

<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

    


             
		<tbody>


    <tr id="trHide">
		<div class="form-group" style="display:none">
          <td>Total: </td>
		 <td><input name="amount1" readonly class="form-control" value="<?php echo 1 ; ?>" style="display:none"  />
         <td><input name="amount" readonly class="form-control" value="<?php echo 1 ; ?>" style="display:none"  /></td> 
         
         </td> 
          
		  <td>Service Charges: </td>
          <td><input name="servicecharge" placeholder="Service Charges" readonly  class="form-control" id="ServiceCharg" value="0" /></td>
		  </div>
        </tr>
    
        

        <div class="form-group" style="display:none">



          <?php

           

              $sel="select stratfrom  from addbus ";


              $ex=$con->query($sel);

              $fet12=$ex->fetch_array();

              echo $fet12["stratfrom"];
          
          
          ?>


<tr>
	
          <td>Services Info: </td>
          <td colspan="3"><textarea col="12" rows="3" placeholder="Enter Services" class="form-control" name="productinfo"><?php echo (empty($fet12['stratfrom'])) ? '' : $fet12['stratfrom'] ?></textarea></td>
		  </div>
        </tr>
        <div class="form-group" style="display:none">
        <tr id="trHide">
          <td>Success URI: </td>
          <!-- //<td colspan="3"><input name="surl" class="form-control" value="<?php //echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>-->
		  
	<td colspan="3"><input name="surl" class="form-control" value="http://localhost/bus_booking/success.php" size="64" /></td>
		  
        </tr>
        
	
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" class="form-control" value="http://localhost/bus_booking/failure.php" size="64" /></td>
		      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />  
        </tr>

          </div>





<div class="form-group">
<lable>Enter Firstname :</label>

<input type="text" name="firstname" value="<?php echo (empty($fet['firstname'])) ? '' : $fet['firstname']; ?>" placeholder="Enter Firstname" required
 class="form-control"></div>


<div class="form-group">
<lable>Enter Lastname :</label>
<input type="text" name="lastname" value="<?php echo $fet["lastname"];?>" placeholder="Enter lastname" required
 class="form-control">
</div>


<div class="form-group">
<lable>Enter Email :</label>
<input type="text" name="email" value="<?php echo (empty($fet['email'])) ? '' : $fet['email']; ?>" placeholder="Enter email" required
 class="form-control">
</div>


<div class="form-group">
<label>Enter Mobile:</label>
<input type="text" name="phone" value="<?php echo (empty($fet['phone'])) ? '' : $fet['phone']; ?>" data-bvalidator="required,maxlength[10],minlength[10],digit" placeholder="Enter Mobile" class="form-control">

</div>




<div class="form-group">
<lable>Gender:&nbsp</label>

Male<input type="radio" name="gender" &nbsp value="male">


Female<input type="radio" name="gender"&nbsp  value="female">

</div>



<div class="form-group">
<lable>Enter Full address :</label>

<textarea name="address" placeholder="Enter address" required
 class="form-control"></textarea>


</div>



</div>





<?php
if(isset($_REQUEST["bid"]))

{



  $bid=$_REQUEST["bid"];

  $sel="select * from addbus where busid='$bid'";

  $ex=$con->query($sel);

  $fet1=$ex->fetch_array();


?>


<div class="col-lg-6">


<table>

<tr>

<img src="<?php  echo $fet1["busimage"];?>"  style="width:100%; height:230px">



</tr>


<input type="text"  name="busid" value="<?php echo $fet1["busid"];?>" readonly style="border:none ; display:none">

<b>Travel name :&nbsp</b><?php  echo $fet1["travelname"];?><br><br>
</div>

<div class="form-group">
<b>From :</b><?php  echo $fet1["frmm"];?><br><br>


</div>

<div class="form-group">
<b>To :&nbsp</b><?php  echo $fet1["too"];?><br><br>
</div>
<div class="form-group">
<b>Departure Time :&nbsp</b><?php  echo $fet1["departuretime"];?><br><br>
</div>

<div class="form-group">

<b>Arrival Time :&nbsp</b><?php  echo $fet1["arrivaltime"];?><br><br>
</div>

<div class="form-group">
<b>Ticket Amount :&nbsp</b>Rs.<?php  echo $fet1["stratfrom"];?><br><br>
</div>



<?php
}

?>

<?php

if(!isset($_SESSION["custid"]))

{


?>
<div class="form-group">

<input type="submit" name="sub" value="Proceed To Payment" class="btn btn-lg btn-danger"  onclick="log()">


</div>


<?php
}
else

{
?>


      
<?php 

if(!$hash) 

{ 
  
  
  ?>
        <br>
			<input type="submit" name="addpayment"  class="btn btn-lg btn-danger" value="Proceed To Payment >>">
			
			
	
<?php

}


}



?>

</table>
</address>






</form>





</div>



</div>
</div>

</div>
<br><br>
<hr style="width:100%; height:1px;  background-color:black">
  
<div class="container">



<h3 align="center">THE NUMBERS ARE GROWING!</h3>
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

<h4 align="center"><b>Bus Ticket</b></h4>

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

<div class="container">
  <div class="row" style="padding: 1% 25%;">
<div class="col-lg-6 text-center">
 <a href="map.html" target="_blank"> <button class="port btn btn-primary" style="width:115px;height: 102%;"> Get in Touch With Us!</button></a> 
</div>

<div class="col-lg-6 text-center">

<a href="iframe.html" target="_blank"> <button class="port btn btn-primary" style="width:115px;height: 102%;">BUS PORTFOLIO</button></a>

  </div>
</div>
</div><br>
    


<?php

require_once("downloadapp.php");


?>
 
<?php
require_once("footer.php");

?>

</body>
</html>