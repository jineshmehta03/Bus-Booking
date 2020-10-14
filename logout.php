<?php
session_start();

unset($_SESSION["custid"]);

unset($_SESSION["fname"]);

unset($_SESSION["em"]);



session_destroy();




echo "<script>
alert('Your are Logout Succefully !')


window.location='index.php';




</script>";
?>