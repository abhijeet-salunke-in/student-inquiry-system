<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
<style type="text/css">
	body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 180px;
  position: fixed;
  z-index: 1;
  top: 1px;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 170px;
  border-radius: 5px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: cyan;
}

.main {
  margin-left: 160px; 
  font-size: 28px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.abhi:hover
{
  background-color: #2f6169;
  color: black;
  border-radius: 5px;
}
</style>

</head>
<body>

<div class="sidenav">
  <a href="#"><img src="./images/cw-logo.gif" style="height: 200px; margin-left: -65px; margin-top: -205px;"><br></a>
  <a href="home.php">HOME</a>
  <a href="inquiry.php">INQUIRY</a>
  <a href="show.php">INQUIRIES</a>
  <a href="showadmission.php">CONFIRMED</a>
  <a href="logout.php" class="abhi">LOGOUT</a>
</div>


</body>
</html>