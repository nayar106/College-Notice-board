<?php
$con=mysqli_connect("localhost","root","","notice");
if(!$con)
die("Server could not connected");
  $a=$_POST["name1"];
  $b=$_POST["email1"];
  $c=$_POST["no1"];
  $d=$_POST["roll1"];
  $e=$_POST["password1"];
  $f=$_POST["cmp1"];
  if($e==$f)
  { 
   $s="insert into student values('".$a."','".$b."','".$c."','".$d."','".$e."')";
   $chk=mysqli_query($con,$s);
   if($chk!=0)
    $m="<b style='color:green;font-size:20px'>Registered Successfully<b>";
   else
   $m="<b style='color:red;font-size:20px'>Already registered,Please login!<b>";
   }
   else
    $m="<b style='color:red;font-size:20px'>Password and confirm password should be same<b>";
   header("location:index.php?data=$m");
?>