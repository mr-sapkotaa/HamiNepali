<!DOCTYPE html>
<html>
<head>

</head>
<body>
<? php
error_reporting(0);
$con=mysqli_connect("localhost:3306","root","","projecti");
if($con)
{
	die("Server not Connected".mysqli_error($con));

}
else {
	echo"Connection Established";
}
$FirstName= $_POST["FirstName"];
$PhoneNumber= $_POST["PhoneNumber"];
$Password= $_POST["Password"];
$sql="Insert into register(FullName,PhoneNumber,Password) values("$FirstName"','"$PhoneNumber"','"$Password"')";
$Result= mysqli_query($con,$sql);
if($Result)
{
	echo " Data inserted ";
	}
	else{
		echo "failed";
	}
	mysqli_close($con);
	?>
</body>
</html>

