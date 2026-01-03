  <?php

session_start();

if(!$_SESSION['uname']) 
{
  header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Abhi's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>




</head>
<body>

<?php include_once('nav.php'); ?>

 
<div class="container" style=" height: 600px; width: 850px; margin-right: 50px; margin-left: 170px; margin-top: 1px;">
   <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: 1px; margin-right: 52px; width: 815px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: 0px;"><p>HOME PAGE</p></h2>
  <div class="row">
    <div class="col-md-4">
      <div style="background-color:  #ff3300; font: bold; border-radius: 5px; height: 200px; font-size: 30px; width: 250px; margin-left: 0px; padding: 25px" class="table">
        <center>
          <p>Total Inquiry</p>
          <hr>
          <p>
            
           <?php

       $con=mysqli_connect("localhost","root","","abhi2");

      $query="select * from inquiry";

    $read=mysqli_query($con,$query); 
$no=0;
 while( $row = mysqli_fetch_array($read))
 {
   $no++;
 }

echo $no;


 
        
         
            ?> 

          </p>
        </center>
      </div> 
    </div>
     <div class="col-md-4">
      <div style="background-color:  #66b3ff; font: bold;  border-radius: 5px; height: 200px; font-size: 30px; width: 260px; margin-left: -3px; padding: 25px;">
        <center>
          <p>Total Admission</p>
          <hr>
          <p>
            
                <?php

       $con=mysqli_connect("localhost","root","","abhi2");

      $query="select * from admission";

    $read=mysqli_query($con,$query); 
$no=0;
 while( $row = mysqli_fetch_array($read))
 {
   $no++;
 }

echo $no;


 
        
         
            ?> 

          </p>
        </center>
      </div> 
    </div>
    <div class="col-md-4">
      <div style="background-color:  #ff00ff; font: bold;  border-radius: 5px; height: 200px; font-size: 30px; width: 250px; margin-left: 0px; padding: 25px;">
        <center>
          <p>Cources Done</p>
          <hr>
          <p>512</p>
        </center>
      </div> 
    </div>
    <div class="col-md-4" style="margin-top: 25px;">
     
    </div>

<div class="col-md-4" style="margin-top: 25px;">
      <div style="background-color:  #d2ff4d; font: bold;  border-radius: 5px; height: 200px; font-size: 30px; width: 290px; padding: 25px; margin-left: -17px;">
        <center>
          <p>Certified Students</p>
          <hr>
          <p>445</p>
        </center>
      </div> 
    </div>

  </div>
</div>
</body>
</html>


