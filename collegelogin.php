<?php
session_start();
$con=mysqli_connect("localhost","root","","notice");
if(!$con)
die("Server could not connected");
$a=$_POST["email3"];
$b=$_POST["password3"];
$s="select * from college where email='".$a."'";
$rs=mysqli_query($con,$s);
$rows=mysqli_fetch_assoc($rs);
if($b==$rows["password"])
{
$_SESSION["UserName"]=$rows["name"];
header("location:collegehome.php");
}
else
{
$error="<b style='color:red;font-size:20px'>Email or password is incorrect<b>";
header("location:index.php?data1=$error");
}
?>
