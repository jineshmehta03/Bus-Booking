<?php


if(isset($_REQUEST["ppallogin"]))


{



    $mob=$_POST["mob"];

    $pass=$_POST["pass"];

    $sel="select * from customer where mobile='$mob' and password='$pass'";


    $ex=$con->query($sel);

    $no=$ex->num_rows;


    $fet=$ex->fetch_array();


    if($no > 0) 



    {


     $_SESSION["custid"]=$fet["custid"];

   

     $_SESSION["mob"]=$fet["mobile"];


     echo "<script>
     alert('Your are Logged In to Book buses from Pay Pal')
 
 
     window.location='https://www.abhibus.com/bus-ticket-offers';
     
     
     
     
     </script>";
 


    }



    else



    {


        echo "<script>
        alert('Your Mobile and Password are incorect Try again!!')
    
    
        window.location='index.php';
        
        
        
        
        </script>";
    
    }


}

?>


<div class="modal-body">
    
          <div class="form-group">


          
<form  method="POST">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" name="mob" class="form-control" id="recipient-name"  required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="text" class="form-control" name="pass" id="message-text"   required>
          </div>
        
      </div>
      <div class="modal-footer">
        <input  type="submit" class="btn btn-primary" name="ppallogin" value="Login To Pay Pal">
      </div>
    </div>

    </form>


  </div>

  
</div>


