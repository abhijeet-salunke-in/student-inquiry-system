<?php

 $id=$_GET['id'];
 //echo $id;
    
    $con=mysqli_connect("localhost","root","","abhi2");

    $query="select * from inquiry where id= '".$id."' ";

    $read=mysqli_query($con,$query);
    while($row =mysqli_fetch_array($read))
    { 
        // photo name  address mobile  watts_no  date  cources institution class fees  feesgave  feesbalenced  occupation  

       $id=$row['id'];
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

<form action="#" method="POST" enctype="multipart/form-data">
   <div class="container" style="height: 100%; width: 550px; margin-left: 190px;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: -23px; margin-right: 52px; width: 800px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: -20px; "><p>ADMISSION PAGE</p></h2>
            <!-- 
     feesgave  feesbalenced  hapte   -->

            Student Id:
            <input type="number" name="txt_sid" class="form-control" placeholder="Enter Name" value="<?php echo $id; ?>" readonly>  
            <br><br>
            Select Photo: 
            <input type="file" name="file_txt" class="form-control">
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
            <input type="text" name="txt_feesgave" class="form-control" placeholder="Enter Fees" id="id_gave" onchange="fees();">
            <br><br>
            Fees Balanced:
            <input type="text" name="txt_feesbalanced" class="form-control" placeholder="Enter Fees" id="id_balanced" readonly="">
            <br><br>
            Installment :
            <input type="text" name="txt_installment" class="form-control" placeholder="Installment">
             <br><br>
            Admission Date / Today's Date:
            <input type="date" name="txt_addate" class="form-control">
            <br><br>
            Next Fees Payment Date:
            <input type="date" name="txt_date" class="form-control">
           

            <br><br><br>
      
      <center>
          <input type="submit" name="btn_save" class="btn btn-success" style="margin-top: -25px;">
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

error_reporting(0);

  $con = mysqli_connect("localhost","root","","abhi2");

    $filename = $_FILES["file_txt"]["name"];
    $tempname = $_FILES["file_txt"]["tmp_name"];
    $folder = "./photos/" . $filename;

  if(isset($_POST['btn_save']))
  {
     
    mysqli_query($con,"insert into admission(in_id,photo,name,address,mobile,watts_no,next_fees_date,cources,institution,class,fees,feesgave,feesbalenced,hapte,occupation,addate)values(
      '".$_POST['txt_sid']."',
      '".$filename."',
      '".$_POST['txt_name']."',
      '".$_POST['txt_address']."',
      '".$_POST['txt_mobile']."',
      '".$_POST['txt_wattsno']."',
      '".$_POST['txt_date']."',
      '".$_POST['txt_cources']."',
      '".$_POST['txt_institution']."',
      '".$_POST['txt_class']."',
      '".$_POST['txt_fees']."',
      '".$_POST['txt_feesgave']."', 
      '".$_POST['txt_feesbalanced']."',
      '".$_POST['txt_installment']."',
      '".$_POST['txt_occupation']."',
      '".$_POST['txt_addate']."')");

    move_uploaded_file($tempname, $folder);

    echo "<script>alert('Data Saved');</script>";
    echo "<script>window.location='showadmission.php';</script>";
    
  }

?>