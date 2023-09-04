<?php
session_start();
?>
<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer5_change.php?var=" + name;
}
</script>



<title>
Choose Image 4!
</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
echo '<body style="background-color:black; color:white; margin:25px;"> <br><center><b><font face="calibri" color="red" size=8>Graph</font><font face="calibri" size ="8">ical Password Authentication System</font></b></center>
<hr style="color:yellow;">
<center><h4>Image Layer 4/5<br>
<center><b>Choose your Image(for the new sequence) ::</b><br><br><center>';

include("connect.php");

    $var=$_GET['var'];
    $_SESSION['a1'][3]=$_GET['var'];

		?>
<?php
$arr = array(0,1,2,3,4);
shuffle($arr);
$i=array("images\wood.jpg","images\bit.jpg","images\\edu.jpg","images\\two.jpg","images\\virus.jpg");

echo '<center>
<img src="'.$i[$arr[0]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[1]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[2]].'" onclick="changeIt(this)" height="120" width="120" >
<img src="'.$i[$arr[3]].'" onclick="changeIt(this)" height="120" width="120">
<img src="'.$i[$arr[4]].'" onclick="changeIt(this)" height="120" width="120"></center>';?>


</body>
</html>