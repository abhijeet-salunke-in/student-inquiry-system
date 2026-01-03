<?php

 $id=$_GET['id'];
 //echo $id;
    
    $con=mysqli_connect("localhost","root","","abhi2");
    $query="select * from admission where id= '".$id."' ";

    $read=mysqli_query($con,$query);
    while($row =mysqli_fetch_array($read))
    { 
 
       $name=$row['name'];
       $address=$row['address'];
       $institution=$row['institution'];
       $mobile=$row['mobile'];
       $watts=$row['watts_no'];
       $class=$row['class'];
       $occupation=$row['occupation'];
       $cources=$row['cources'];
       $fees=$row['fees'];
       $hapte=$row['hapte'];
       $feesgave=$row['feesgave'];
       $date=$row['next_fees_date'];
       $feesbalenced=$row['feesbalenced'];
       $addate=$row['addate'];

     }


?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body>

<?php  include_once('nav.php'); ?>

<form action="#" method="POST" enctype="multipart/form-data">
   <div class="container" style="height: 100%; width: 550px; margin-left: 190px;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: -23px; margin-right: 52px; width: 900px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: -20px; "><p>UPDATE ADMISSION PAGE</p></h2>
            <!-- 
     feesgave  feesbalenced  hapte   -->

            Student Id:
            <input type="number" name="txt_sid" class="form-control" placeholder="Enter Name" value="<?php echo $id; ?>">  
            <br><br>
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
            Father Occupation:
            <input type="text" name="txt_occupation" class="form-control" placeholder="Enter Occupation" value="<?php echo $occupation; ?>">
            <br><br>
            Fees:
            <input type="text" name="txt_fees" class="form-control" placeholder="Enter Fees" value="<?php echo $fees; ?>" id="id_fees">
            <br><br>
            Fees Gave:
            <input type="text" name="txt_feesgave" class="form-control" placeholder="Enter Fees" id="id_gave" value="<?php echo $feesgave; ?>" onchange="fees();">
            <br><br>
            Fees Balanced:
            <input type="text" name="txt_feesbalanced" class="form-control" placeholder="Enter Fees" id="id_balanced" value="<?php echo $feesbalenced; ?>" readonly="">
            <br><br>
            Installment :
            <input type="text" name="txt_installment" class="form-control" placeholder="Installment" value="<?php echo $hapte; ?>">
             <br><br>
            Admission Date / Today's Date:
            <input type="date" name="txt_addate" class="form-control" value="<?php echo $addate; ?>">
            <br><br>
            Next Fees Payment Date:
            <input type="date" name="txt_date" class="form-control" value="<?php echo $date; ?>">
           

            <br><br><br>
      
      <center>
          <input type="submit" name="btn_update" class="btn btn-success" value="Update" style="margin-top: -25px;">
      </center>
 
</form>

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

</body>
</html>

<?php

  $con=mysqli_connect("localhost","root","","abhi2");

  if(isset($_POST['btn_update']))
  {
  
     
  mysqli_query($con,"update admission set
    
    name='".$_POST['txt_name']."',
    address='".$_POST['txt_address']."',
    mobile='".$_POST['txt_mobile']."',
    watts_no='".$_POST['txt_wattsno']."',
    next_fees_date='".$_POST['txt_date']."',
    cources='".$_POST['txt_cources']."',
    institution='".$_POST['txt_institution']."',
    class='".$_POST['txt_class']."',
    fees='".$_POST['txt_fees']."',
    feesgave='".$_POST['txt_feesgave']."',
    feesbalenced='".$_POST['txt_feesbalanced']."',
    hapte='".$_POST['txt_installment']."',
    occupation='".$_POST['txt_occupation']."',
    addate='".$_POST['txt_addate']."' where id = ".$id." ");



    echo "<script>alert('Data Updated');</script>";
    echo "<script>window.location='showadmission.php';</script>";

  }

?>