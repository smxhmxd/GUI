<?php
session_start();
ob_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "login_success.php?var=" + name;
}
</script>



<title>
Layer 5!
</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
echo '<body style="background-color:black; color:white; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<a href="logout.php" class="btn btn-primary" role="button">Logout</a>
<hr style="color:yellow;">
<center><h4>Image Layer 5/5<br><i>After selecting any image on this layer - <br><font color="lime">If your selection sequence is correct
then you will be redirected to your account</font> , <font color="orange">else you\'ll be redirected to to the beginning of the selection process again!</font></center>
<center><b>Choose your Image ::</b><br><br><center>';



            $var=$_GET['var'];
			$_SESSION['a'][9]=$_GET['var'];
			$_SESSION['layer4']=$_GET['var'];



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

?>

</body>
</html>