<?php
session_start();
?>
<head><link rel="shortcut icon" href="photos/favicon.ico"><link rel="stylesheet" href="css.css" type="text/css"/>
<script>
			function validate()
			{

			var file=document.forms["form2"]["file"].value;		
			if (file==null || file=="")
			{
				alert("Please Upload a file !");return false;
			}
			else
			return true;
			}
			
		</script>
		<noscript>Your Javascript is off !! </noscript>
<title>Change Profile Picture</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
echo '<body style="background-color:black; color:white; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<a href="logout.php" class="btn btn-primary" role="button">Logout</a>
<hr style="color:yellow;"><h2><center>Upload Profile Picture</h2>';
echo'<br><center><b><br>
<form name="form2" action="sub1.php" method="post" onSubmit="return validate();" enctype="multipart/form-data">
			
			Add Image (only .jpg, .jpeg, .gif, .png, .JPG, .PNG, .GIF format) : <input type="file" class="btn btn-secondary" name="file"></input><br>
<br>
<button type="submit" class="btn btn-primary" name="submit">Upload</button>
</form>';
echo '<center><br><a href="account.php"><font color="white">Click here to go back to your account</font></a></center><br>';
?>			
</body>
</html>