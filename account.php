<?php
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="photos/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>


<body style="background-color:black; color:white; margin:25px;">
<?php
include("connect.php");
$name=$_SESSION['uname'];
$result=mysqli_query($con,"select username,name,clg,email,phone,userimage from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		$uname=$name;
		$rname=$row[1];
		$clgname=$row[2];
		$email=$row[3];
		$phone=$row[4];
		$userpic=$row[5];
		}
echo'<br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<a href="logout.php" class="btn btn-primary" role="button">Logout</a><hr style="color:yellow;">';


					echo '<center><b>Hi '.$name.' ! Find your credentials below : </b><br><br><br>


					<table>
					<tr><td><img src="'.$userpic.'" border="10" height="250" width="200" bordercolor="red"></td></b>';
					echo '<td>&nbsp;&nbsp;&nbsp;&nbsp; Username : '.$uname.'<br>
					&nbsp;&nbsp;&nbsp;&nbsp; Name : '.$rname.'<br>
					&nbsp;&nbsp;&nbsp;&nbsp; Email : '.$email.'<br>
					&nbsp;&nbsp;&nbsp;&nbsp; College Name : '.$clgname.'<br>
					&nbsp;&nbsp;&nbsp;&nbsp; Phone : '.$phone.'<br>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_sequence_check_password.php"><font color="white"> Click here to Change Sequence of Images</a><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_password.php"><font color="white"> Click here to Change Password</a>
					<br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="change_profile_pic.php"><font color="white"> Click here to Change Profile Picture</a></td></tr></table></center>';
?>
</body>
</html>