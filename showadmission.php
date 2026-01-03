  
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
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>



<style type="text/css">
 
  .btn-info
  {
    margin-top: 5px;
    margin-bottom: 5px;
  }
  .photo
  {
    height: 100px;
    /*width: 50px;*/
  }

</style>
</head>
<body>

<?php  include_once('nav.php'); ?>

<div class="container" style="height: 100%; width: 800px; margin-left: 200px;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: 1px; margin-right: 52px; width: 1740px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: -20px;"><p>ADMISSIONS CONFIRMED</p></h2>
    
<table class="table table-hover" cellpadding="5" width="100%" id="tblUser" style="margin-left: -20px; margin-top: 25px;">
  <thead style="background-color: #99ffdd;">

    <th>Srno</th>
    <th>Student Id</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Mobile No.</th>
    <th>Wattsapp No.</th>
    <th>Address</th>
    <th>Institution</th>
    <th>Class</th>
    <th>Cources</th>
    <th>Father Occupation</th>
    <th>Fees</th>
    <th>Fees Gave</th>
    <th>Fees Balanced</th>
    <th>Installment</th>
    <th>Admission Date</th>
    <th>Next Fees Payment Date</th>
    <th>Options</th>

  </thead>
</div>
<?php
 
    $con=mysqli_connect("localhost","root","","abhi2");
    $query="select * from admission";
    $read=mysqli_query($con,$query);

    $Srno=0;

    $string= "";

    while($row =mysqli_fetch_array($read))
    {

      $query2="select * from admission where in_id = '".$row['id']."' ";

      $read2=mysqli_query($con,$query2);
      $row2 =mysqli_fetch_array($read2);

      if($row2 > 0)
      {
        $string = "aria-disabled=true';";
      }

      $Srno++;
      
     // <th>Fees Balanced</th>
    // <th>Installment</th>
    // <th>Admission Date</th>
    // <th>Next Fees Payment Date</th>
    // <th>Options</th>

       echo"
<tr>
    <td>$Srno</td>
    <td>$row[in_id]</td>
    <td>
        <img src='./photos/$row[photo]' class='photo'>
    </td>
    <td>$row[name]</td>
    <td>$row[mobile]</td>
    <td>$row[watts_no]</td>
    <td>$row[address]</td>
    <td>$row[institution]</td>
    <td>$row[class]</td>
    <td>$row[cources]</td>
    <td>$row[occupation]</td>
    <td>$row[fees]</td>
    <td>$row[feesgave]</td>
    <td>$row[feesbalenced]</td>
    <td>$row[hapte]</td>
    <td>$row[addate]</td>
    <td>$row[next_fees_date]</td>
      
      <td>
          <a href='download.php?id=$row[id]' class='btn btn-success' $string>DOWNLOAD</a>

          <a href='update2.php?id=$row[id]' class='btn btn-info'>UPDATE</a>

           <a href='delete2.php?id=$row[id]' class='btn btn-danger'>DELETE</a>
     </td>
</tr>
    ";
    }
          
     ?>

</table>

<script>
$(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>

</body>
</html>
