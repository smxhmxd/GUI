<?php
session_start();
echo '<body style="background-color:black; color:white; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<br><hr style="color:yellow;"><br><br>';
$name=$_SESSION['uname'];
$allowedExts = array("jpg","jpeg","gif","png","JPG","PNG","GIF");
$tmp = explode(".", $_FILES["file"]["name"]);
$extension = end($tmp);
echo ''.$extension.'';
if ((($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/GIF") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 6000000) && in_array($extension, $allowedExts)) 
	{
		if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code : " .$_FILES["file"]["error"]. "<br />";
			}
				else 
				{
				$photo=$name.".".$extension;

						move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$photo); 
						echo " uploaded in the system !";

						include ("connect.php");
						$picname="images/".$name.".".$extension;
						$query="update user set userimage='$picname' where username='$name'";
						$result=mysqli_query($con,$query);

				}
	}

else
{
echo "Invalid photo file";
}
echo '<center><br><a href="account.php"><font color="white">Click here to go back to your account</font></a></center><br>';
?>