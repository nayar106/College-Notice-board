<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">
#sec{
     height:350px;
     width:550px;
     background-color:#E2E6F6;
     margin-left:300px;
     margin-top:100px;
     border:5px groove blue;
     }
  a{
    text-decoration:none;
    color:white; 
    margin-left:900px;
    margin-top:10px;
    }
  #p{
     background-color:#54BD94;
     color:white;
     font-weight:bold;
     text-align:center;
     font-size:20px;
      font-family:Fixedsys;
      }
</style>
</head>
<body style="background-color:#777FE2">
<div class="container">
<div class="row">
<b style="color:white">Welcome
<?php
session_start();
if(isset($_SESSION["UserName"]))
echo $_SESSION["UserName"];
else
header("location:index.php");
?>
</b>
<a href="logout.php" class=" btn btn-info"><b>Logout</b></a>
<section id="sec">
<?php
$con=mysqli_connect("localhost","root","","notice");
if(!$con)
die("server could not connected");
$n="select notice from college where id=125";
$rs=mysqli_query($con,$n);
$notice=mysqli_fetch_assoc($rs);
   echo "<p id='p'>NOTICE</p>";
  echo "<p style='text-align:justify;margin-left:10px;margin-right:10px'>".$notice["notice"]."</p>";

?>
</section>
</div>
</div>
</body>
</html>