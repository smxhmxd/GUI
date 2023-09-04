
<?php
session_start();
?>
<?php

include("connect.php");

	
$old=$_POST['old'];
$new=$_POST['new'];

$username=$_SESSION['uname'];

$query="select * from user where username='$username' and password='$old' ";
$query2="update user set password='$new' where username='$username'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$rows=mysqli_num_rows($result);
echo '<body style="background-color:black; color:white; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<br><hr style="color:yellow;"><br><br>';

if($rows==0) {echo '<center><font size="6" color="White">Wrong old password!!!</font></center><br>';}

else{$result2=mysqli_query($con,$query2);
echo '<center><font size="6" color="White">Password Updated!!!</font></center><br>';
}

echo '<center><font size="6" color="White"><a href="account.php">Go back!</a></font></center><br>';
		?>