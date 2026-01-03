<?php

error_reporting(0);

session_start();

if(!$_SESSION['uname']) 
{
  header("Location:index.php");
}

?>
<br>
<?php


 $id = $_GET['id'];
 //echo $id;
    
    $con=mysqli_connect("localhost","root","","abhi2");
    $query="select * from admission where id= ".$id." ";

    $read=mysqli_query($con,$query);
    while($row =mysqli_fetch_array($read))
    { 

      // in_id,photo,name,address,mobile,watts_no,next_fees_date,cources,institution,class,fees,feesgave,fees,hapte,occupation,addate

       $id=$row['in_id'];
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
    input
    {
      border: white;
    }
    .photo
    {
      height: 300px;
      width: 300px;
      margin-left: -30px;
    }
    .container
    {
      margin-top: 250px;
    }
    .btn-success
    {
        margin-left: 935px;
        margin-top: -25px;
        
    }
   
  </style>

</head>
<body style="padding: 5px;">

<button style="" class="btn btn-success" onclick="window.print();" style="float: right; margin-left: 250px;">Print</button>

<div style="border: 2px solid black; padding: 20px; height: 1400px;">

<div style="border: 2px solid black; height: 300px; width: 75%; border-radius: 15px; float: left;">
  
  <div style="text-align: center; padding: 5px;">

    <h1 style="font-size: 72px;"><b>कोडिंगवाले</b></h1>
<br>
    <h2 style="margin-top: -17px;">कोडिंग क्लासेस </h2>
<br>
    <h5 style="margin-top: -15px;">येवला रोड , नविन बस स्टॅन्ड  समोर , वैजापूर </h6>
<br>
    <h5 style="margin-top: -18px;">मो.  9168163938 / 8956768716</h6>
<br>
    <h5 style="margin-top: -18px;">शासन नोंदणी क्रमांक  : 1010124982303</h6>

  </div>

</div>

<div style="border: 2px solid black; height: 300px; width: 24%; float: right; border-radius: 15px;">
  
  <?php

    $con=mysqli_connect("localhost","root","","abhi2");

    $query="select * from admission where id = '".$id."' ";

    $read=mysqli_query($con,$query);

    while($row =mysqli_fetch_array($read))
    {
        echo "

        <img src='./photos/$row[photo]' class='photo'>

        ";
    }

  ?>

</div>


<div style="height: 120px; margin-top: 250px; width: 100%;"><!-- for space  --></div>


<form action="#" method="POST">
<table class="table table-bordered" width="100%">
  <tr>
    <th>विद्यार्थी आयडी</th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" value="<?php echo $id; ?>" readonly></td>
  </tr>
  <tr>
    <th>नाव</th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="संपूर्ण नाव प्रविष्ट करा " value="<?php echo $name; ?>"></td>
  </tr>
  <tr>
    <th>पत्ता </th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="पत्ता प्रविष्ट करा " value="<?php echo $address; ?>"></td>
  </tr>
  <tr>
    <th>शाळा / कॉलेज </th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="शाळा / कॉलेज चे नाव प्रविष्ट करा " value="<?php echo $institution; ?>"></td>
  </tr>
  <tr>
    <th>मोबाइल नं . </th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="मोबाइल नं .प्रविष्ट करा " value="<?php echo $mobile; ?>"></td>
  </tr>
  <tr>
    <th>Wattsapp No. </th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $watts; ?>"><th>शैक्षणिक वर्ग </th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $class; ?>"></td>
  </tr>
  <tr>
    <th>वडिलांचा व्यवसाय</th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा  " value="<?php echo $occupation; ?>"><th>कोर्सेस </th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $cources; ?>"></td>
  </tr>
  <tr>
    <th>फिस </th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $fees; ?>"><th>हप्ते</th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $hapte; ?>"></td>
  </tr>
  <tr>
    <th>दिलेली फीस </th><td><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $feesgave; ?>"><th>पुढील फीस देय दिनांक </th><td><input type="date" name="txt_name" class="form-control" style="border: none;" placeholder="Wattsapp No. प्रविष्ट करा " value="<?php echo $date; ?>"></td>
  </tr>
  <tr>
    <th>बाकी फीस</th><td colspan="3"><input type="text" name="txt_name" class="form-control" style="border: none;" placeholder="मोबाइल नं .प्रविष्ट करा " value="<?php echo $feesbalenced; ?>"></td>
  </tr>

</table>
<div style=" height: 40px; width: 30%; float: right; text-align: right;">
  दिनांक :  <input type="date" name="" value="<?php echo $addate; ?>" >
</div>
</form>

<div class="container" style=" height: 80px; width: 100%; margin-top: 330px;">
  <div class="row">
    <div class="col-md-4"><p style="float: left;">क्लासचा शिक्का</p></div>
    <div class="col-md-4"><p style="text-align: center;">शिक्षकाची सही</p></div>
    <div class="col-md-4"><p style="float: right;">पालकाचे सही</p></div>
  </div>
    
</div>

</div><!-- div borderwala closed -->

</body>
</html>


<?php 



$con = mysqli_connect("localhost","root","","abhi2");

    $filename = $_FILES["file_txt"]["name"];
    $tempname = $_FILES["file_txt"]["tmp_name"];
    $folder = "./photos/" . $filename;

if(isset($_POST['btn_save']))
{
    mysqli_query($con,"insert into admission(in_id,name,mobile,date,cources,institution,fees,feesgave,feesbalenced,occupation,photo)values(
      '".$_POST['txt_in_id']."',
      '".$_POST['txt_name']."',
      '".$_POST['txt_mobile']."',
      '".$_POST['txt_date']."',
      '".$_POST['txt_cources']."',
      '".$_POST['txt_institution']."',
      '".$_POST['txt_fees']."',
      '".$_POST['txt_feesgave']."',
      '".$_POST['txt_feesbalenced']."',
      '".$_POST['txt_occupation']."',
      '".$filename."')");

    move_uploaded_file($tempname, $folder);

    echo "<script>alert('Admission Confirmed');</script>";
    echo "<script>window.location='showadmission.php';</script>";
}

?>
