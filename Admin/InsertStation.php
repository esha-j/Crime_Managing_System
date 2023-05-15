<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$txtName=$_POST['txtName'];
	$txtAdd=$_POST['txtAdd'];
	$cmbCIty=$_POST['cmbCity'];
	$txtEmail=$_POST['txtEmail'];
	$txtMobile=$_POST['txtMobile'];
	$txtUser=$_POST['txtUser'];
	$txtPassword=$_POST['txtPassword'];
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","");
	// Select Database
	mysqli_select_db($con,"crimes");
	// Specify the query to Insert Record
	$sql = "insert into POLICE_STATION(POLICESTATION_NAME,ADDRESS,CITY_ID,EMAIL,CONTACT_NO,Username,Password) values('".$txtName."','".$txtAdd."','".$cmbCIty."','".$txtEmail."','".$txtMobile."','".$txtUser."','".$txtPassword."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Police Station Inserted Succesfully");window.location=\'Station.php\';</script>';

?>
</body>
</html>