  
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
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


 


<style type="text/css">
  .btn-info
  {
    margin-top: 5px;
    margin-bottom: 5px;
  }
</style>
</head>
<body>

<?php  include_once('nav.php'); ?>


<div class="container" style="height: 100%; width: 800px; margin-left: 200px;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: 1px; margin-right: 52px; width: 1160px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: -20px;"><p>INQUIRIES...</p></h2>
    
<table class="table table-hover" cellpadding="5" id="tblUser" style="margin-left: -20px; margin-top: 25px;">
	<thead style="background-color: #99ffdd;">

		<th>Srno</th>
		<th>Name</th>
		<th>Mobile No.</th>
    <th>Wattsapp No.</th>
    <th>Address</th>
		<th>Date of Inquiry</th>
    <th>Institution</th>
    <th>Class</th>
		<th>Cources</th>
		<th>Fees</th>
		<th>Father Occupation</th>
		<th>Options</th>

	</thead>


<?php
 
    $con=mysqli_connect("localhost","root","","abhi2");
    $query="select * from inquiry";
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
      

    	 echo"
<tr>
	  <td>$Srno</td>
    <td>$row[name]</td>
    <td>$row[mobile]</td>
    <td>$row[watts_no]</td>
    <td>$row[address]</td>
    <td>$row[date]</td>
    <td>$row[institution]</td>
    <td>$row[class]</td>
    <td>$row[cources]</td>
    <td>$row[fees]</td>
    <td>$row[occupation]</td>
		  
      <td>
          <a href='admission.php?id=$row[id]' class='btn btn-success' $string>CONFIRM</a>

          <a href='update.php?id=$row[id]' class='btn btn-info'>UPDATE</a>

           <a href='delete.php?id=$row[id]' class='btn btn-danger'>DELETE</a>
	   </td>
</tr>
    ";
    }
          
     ?>

</table>
<center>
<a href="inquiry.php" class="btn btn-warning">Insert Inquiry</a>
</center>

<script>
$(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>

</div>
</body>
</html>
 
