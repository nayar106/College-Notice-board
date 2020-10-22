<?php
session_start();
$con=mysqli_connect("localhost","root","","notice");
if(!$con)
die("Server could not connected");
$a=$_POST["email2"];
$b=$_POST["password2"];
$s="select * from student where email='".$a."'";
$rs=mysqli_query($con,$s);
$rows=mysqli_fetch_assoc($rs);
if($b==$rows["password"])
{
$_SESSION["UserName"]=$rows["name"];
header("location:home.php");
}
else
{
$error="<b style='color:red;font-size:20px'>Email or password is incorrect<b>";
header("location:index.php?err=$error");
}
?>
