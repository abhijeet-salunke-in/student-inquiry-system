<?php
error_reporting(0);

  $id = $_GET['id'];

  // echo "$id";

  $con=mysqli_connect("localhost","root","","abhi2");
  
  mysqli_query($con,"delete from admission where id =".$id."");

echo"<script>alert('Data Deleted');</script>";
echo "<script>window.location='show.php'</script>";
?>