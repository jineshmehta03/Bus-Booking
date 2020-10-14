
<nav class="navbar navbar-expand-lg navbar-light bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >

    <span class="navbar-toggler-icon" ></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent" >

    <ul class="navbar-nav mr-auto">


    <?php
   if(!isset($_SESSION["custid"]))


   {
    ?>

      <li class="nav-item active">
        <button class="btn btn-outline-primary my-2 my-sm-0" style="margin-right: 5px; line-height: 25px" type="submit"  >
      <a href="Register.php"><i class="fas fa-user-plus"></i>  Sign Up </a></button>
      </li>
      <li class="nav-item active">
        <button class="btn btn-outline-primary my-2 my-sm-0 fas" type="submit" style=" margin-right: 5px;line-height: 25px ">
       <a href="Login.php">  <i class="fas fa-sign-in-alt"></i> Log in</a></button>
      </li>



      <?php
   }


   else


   {


   ?>

<li class="nav-item dropdown">
      
       <a href="Login.php" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:orange !important; font-size:20px; padding:0px">  <i class="fas fa-sign-in-alt"></i><b>Welcome to Quick Bus : </b> <b style="color:#04f9f9 !important; font-size:22px;"><?php   echo $_SESSION["fname"];?></b></a>



       <ul class="dropdown-menu">



<li><a href="myprofile.php"  class="dropdown-item"><span class="fa fa-user" style="color:black; font-size:15px"></span> My Profile</a></li>



<li><a href="changepassword.php"  class="dropdown-item"><span class="fa fa-lock" style="color:black; font-size:15px"></span> Change Password</a></li>




<li><a href="mybooking.php"  class="dropdown-item"><span class="fa fa-truck" style="color:black; font-size:15px"></span> My Booking <button type="button" class="btn btn-primary">
  <span class="badge badge-danger">




  <?php

$custid=$_SESSION["custid"];
$sel="select count(bid) as total from booking where custid='$custid'";

$ex=$con->query($sel);

$fet=$ex->fetch_array();


echo $fet["total"]



?>
    






  </span>
</button></a></li>





<?php

$custid=$_SESSION["custid"];
$sel="select * from customer where custid='$custid'";

$ex=$con->query($sel);

$fet=$ex->fetch_array();



?>
    

<li><a href="myprofile.php?did=<?php echo $fet["custid"];?>"  class="dropdown-item"><span class="fa fa-trash" style="color:black; font-size:15px"   onclick="return confirm('Are you sure to delete your Account')"></span>Delete Account</a></li>

<li><a href=""  class="dropdown-item"><span class="fa fa-trash" style="color:black; font-size:15px"></span>Cancellation</a></li>

       </ul>




      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
        
      
       

      <div id="example2" align="center" button class=content name="content" style="height:35px;width: 330px"><p> Customer Support : 1-800-000-000</p></button></div>

      
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <button class="btn btn-outline-warning my-2 my-sm-0 fas" data-toggle="modal" data-target="#exampleModal4" type="submit" style=" margin-right: 5px;line-height: 25px ">
        <a> Help</a></button>

        <<button class="btn btn-outline-warning my-2 my-sm-0 fas" data-toggle="modal" data-target="#exampleModal4" type="submit" style=" margin-right: 5px;line-height: 25px ">
        <a href="logout.php"> Logout</a></button>

      </li>
    </ul>
       
      <?php

   }


   ?>
  </div>
 
</nav>
