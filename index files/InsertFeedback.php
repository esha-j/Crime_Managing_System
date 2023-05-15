<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FEEDBACK</title>
</head>

<body>
<?php

	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$Mobile=$_POST['Mobile'];
	$Feedback=$_POST['Feedback'];
	
	// Establish Connection with MYSQL
	$con = mysqli_connect ("localhost","root","");
	// Select Database
	mysqli_select_db($con,"crimes");
	// Specify the query to Insert Record
	$sql = "insert into FEEDBACK(NAME,EMAIL,PHONE,FEEDBACK) values('".$Name."','".$Email."','".$Mobile."','".$Feedback."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'Contact.php\';</script>';

?>
</body>
</html>