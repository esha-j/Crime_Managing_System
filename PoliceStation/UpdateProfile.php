<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Id=$row['User_Id'];
$Name=$row['Name'];
$Address=$row['Address'];
$City=$row['City'];
$Email=$row['Email'];
$Mobile=$row['Mobile'];
$Gender=$row['Gender'];
$Birthdate=$row['BirthDate'];
$Station_Name=$row['Station_Name'];

$UserName=$row['UserName'];
$Password=$row['Password'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","");
// Select Database
mysqli_select_db($con,"crimes");
// Specify the query to Update Record
$sql = "Update POLICE_STATION set POLICESTATION_NAME='".$Name."',ADDRESS='".$txtAdd."',CITY='".$txtCity."',CONTACT_NO='".$txtMobile."',EMAIL='".$txtEmail."',Username='".$txtUser."',Password='".$txtPass."' where Station_Id=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>