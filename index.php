        
<?php
error_reporting(0);
 
session_start();
    
     $con = mysqli_connect("localhost","root","","abhi2");
  
     $uname=$_POST['txt_name'];
     $password=$_POST['txt_password'];

  if(isset($_POST['btn_login']))
   {

      $query="select * from user where uname='".$uname."' and password='".$password."' ";

       $read=mysqli_query($con,$query);

       $row= mysqli_fetch_array($read);
            
        if($row > 0)
        {

             $_SESSION['uname'] = $uname;
          echo "<script>window.location='home.php';</script>";
        }

         else{

           echo "<script>alert('incorrect username & password');</script>";

        }
  }
     
  ?>







<!DOCTYPE html>
<html>
<head>
	<title>ABHI's</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     
     <style type="text/css">
         .jumbotron
         {
            height: 350px;
            width: 350px;
            margin-left: 350px;
            margin-top: 60px;
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoypprGBtIFOhehvzHXAgCr5vHK2V0x4Fquw_boM62JwvIc3w9Z6dd2CsOuvZMhP5-YGU&usqp=CAU);
            background-repeat: no-repeat;
            background-size: cover;
         }
         .form-control
         {
            width: 250px;
         }
     </style>
</head>
<body>
  
<div class="jumbotron">
  <form action="#" method="POST">
    <center>
     <h2 style="margin-top: -35px; text-shadow: 2px 2px red;">ABHI's</h2><h2>LOGIN FORM</h2>
     <br>
     <input type="text" name="txt_name" class="form-control">
     <br>
     <input type="text" name="txt_password" class="form-control">
     <br>
     <input type="submit" name="btn_login" class="btn btn-primary">

    </center>
  </form>
</div>

  <!--   <form action="#" method="POST">
    <center>
    <div class="container">
    <br>
     <div class="jumbotron">
    <h2 style="color: #884EA0;"><h2 style="color: red;">ABHI'S</h2><h2> LOGIN FORM</h2><br>
  
    <table border="2" cellpadding="15" style="margin-bottom: 25px;" class="table table-dark">
     <tr>
           <th>USERNAME</th>
           <td>
           	<input type="text" name="txt_name">
           </td>
           </tr>
      <tr>
            <th>PASSWORD</th>
           <td>
           	<input type="text" name="txt_password">
           </td>
       </tr> 
       </table>  
           <br>
            <input type="submit" name="btn_login" value="LOGIN" class="btn btn-success">
            

        </center>
     </div>
     </div>
   </form> -->
  </body>
</html>