<?php
// error_reporting(0);
  $email=$_GET['email'];
  include('../connection.php');
  $sql= mysqli_query($mysqli,"DELETE FROM last_played WHERE email = '".$email."'");
?>
