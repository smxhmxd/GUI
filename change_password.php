<?php
session_start();
?>
<html>
<head>


<title>
Change Password
</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<body style="background-color:black; color:white; margin:25px;"> <br>
<center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<hr style="color:yellow;">
<form name="form" action="change_password_success.php" method="post" onSubmit="return validate();"> <font size="2" color="blue">
<div class="container">
<div class="mb-3">
<label class="text-light">Old Password</label>
<input type="password" class="form-control" placeholder="Enter your Old Password" name="old" autocomplete="off" required>
</div>
<div class="mb-3">
<label class="text-light">New Password</label>
<input type="password" class="form-control" placeholder="Enter your Old Password" name="new" autocomplete="off" required>
</div>
<button type="submit" class="btn btn-primary" name="sub">Update</button>

</div>
</form>


</center>
</body>
</html>