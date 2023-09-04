<?php
session_start();
ob_start();
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer2_login.php?var=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>
<?php
echo '<body style="background-color:black; color:white; height:100vh; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<a href="logout.php" class="btn btn-primary" role="button">Logout</a>
<hr style="color:yellow;">
<center><h4>Image Layer 1/5';

// $selectagain =0;
// if ($_SESSION['selectagain']==1)
// {
// echo '<font color="orange"><br>Your last selection sequence of images was wrong ! Start Fresh again !</font>';
// $_SESSION['selectagain']==0;
// }


echo'<i><br>Selecting any image will redirect you the next layer !<br><br>
Choose your Image ::<br><br>';
$ar[0]="wood.";
$ar[1]="edu.";
$ar[2]="bit.";
$ar[3]="two.";
$ar[4]="virus.";
shuffle($ar);

echo '<center>';
for($i=0;$i<=4;$i++)
echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)" height="120" width="120"> ';
echo '</center>
</body>';
echo '<footer><br><br><br><br><br><br></footer>';
?>
</body>
</html>