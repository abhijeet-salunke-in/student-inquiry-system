<?php

 $id=$_GET['id'];
 //echo $id;
    
    $con=mysqli_connect("localhost","root","","abhi2");

    $query="select * from inquiry where id= '".$id."' ";

    $read=mysqli_query($con,$query);
    while($row =mysqli_fetch_array($read))
    { 
        // photo name  address mobile  watts_no  date  cources institution class fees  feesgave  feesbalenced  occupation  

      
       $name=$row['name'];
       $mobile=$row['mobile'];
       $watts=$row['watts_no'];
       $address=$row['address'];
       $date=$row['date'];
       $institution=$row['institution'];
       $cources=$row['cources'];
       $class=$row['class'];
       $fees=$row['fees'];
       $occupation=$row['occupation'];


     }

?>
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
 

 <script type="text/javascript">
    function fees()
    {
      var fees= document.getElementById('id_fees').value;
      var gave= document.getElementById('id_gave').value;
      var balanced = fees-gave;
      // alert(balanced);
      document.getElementById('id_balanced').value= balanced; 

    }

 </script>

 <style type="text/css">

.alert-dark 
{
  background-color: red; 
}

.form-control
{
  margin-top: 2px;
}

 </style>
}
 

</head>
<body>

<?php  include_once('nav.php'); ?>

<form action="#" method="POST">
   <div class="container" style="height: 100%; width: 550px; margin-left: 190px;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: -23px; margin-right: 52px; width: 800px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: -20px; "><p>UPDATE PAGE</p></h2>
      

            Full Name:
            <input type="text" name="txt_name" class="form-control" placeholder="Enter Name" value="<?php echo $name; ?>">
            <br><br>
            Mobile No. :
            <input type="number" name="txt_mobile" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $mobile; ?>">
            <br><br>
            Wattsapp No. :
            <input type="number" name="txt_wattsno" class="form-control" placeholder="Enter Wattsapp Number" value="<?php echo $watts; ?>">
            <br><br>
            Address:
            <textarea class="form-control" name="txt_address" placeholder="Enter Your Exect/Parmanent Address"><?php echo $address; ?></textarea>
            <br><br>
            Date Of Inquiry:
            <input type="date" name="txt_date" class="form-control" value="<?php echo $date; ?>">
            <br><br>
            Institution:
            <textarea class="form-control" placeholder="Enter School / College Name" name="txt_institution"><?php echo $institution; ?></textarea>
            <br><br>
            Class:
            <input type="text" name="txt_class" class="form-control" placeholder="Enter Class" value="<?php echo $class; ?>">
            <br><br>
            Cources:
            <select class="form-control" name="txt_cources">
              <option><?php echo $cources; ?></option>
              <option>Computer Basic</option>
              <option>CCC</option>
              <option>MS-CIT</option>
              <option>Linux</option>
              <option>Software/Web Development + 11 cources-</option>
              <option>App Development</option>
              <option>C Language </option>
              <option>C++ </option>
              <option>Java </option>
              <option>Adv.Java </option>
              <option>Python</option>
              <option>Python-Django,Flash</option>
              <option>Software Dev. Using Java</option>
              <option>Mongodb, Express, Angular, React, Node, MEARN , MEAN- Full Stack</option>
            </select>
            <br><br>
            Fees:
            <input type="text" name="txt_fees" class="form-control" placeholder="Enter Fees" value="<?php echo $fees; ?>">
            <!-- <br><br>
            Fees Gave:
            <input type="text" name="txt_feesgave" class="form-control" placeholder="Enter Fees" id="id_gave">
            <br><br>
            Fees Balanced:
            <input type="text" name="txt_feesbalanced" class="form-control" placeholder="Enter Fees" id="id_balanced" readonly> -->
            <br><br>
            Father Occupation:
            <input type="text" name="txt_occupation" class="form-control" placeholder="Enter Occupation" value="<?php echo $occupation; ?>">
            <br><br><br>
      
      <center>
          <input type="submit" name="btn_update" value="UPDATE" class="btn btn-info" style="margin-top: -25px;">
      </center>
 
</form>
</body>
</html>

<?php

  $con=mysqli_connect("localhost","root","","abhi2");

  if(isset($_POST['btn_update']))
  {
     
  mysqli_query($con,"update inquiry set 
    name='".$_POST['txt_name']."',
    mobile='".$_POST['txt_mobile']."',
    watts_no='".$_POST['txt_wattsno']."',
    address='".$_POST['txt_address']."',
    date='".$_POST['txt_date']."',
    institution='".$_POST['txt_institution']."',
    class='".$_POST['txt_class']."',
    cources='".$_POST['txt_cources']."',
    fees='".$_POST['txt_fees']."',
    occupation='".$_POST['txt_occupation']."' where id = ".$id." ");

    echo "<script>alert('Data Updated');</script>";
    echo "<script>window.location='show.php';</script>";
  }

?>
