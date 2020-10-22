<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">
#sec1{
     height:350px;
     width:550px;
     background-color:white;
     margin-left:300px;
     margin-top:80px;
     border:3px solid blue;
     }
     a{
    text-decoration:none;
    color:white; 
    margin-left:1100px;
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
<b style="color:white">Welcome to</b>
<?php
$notice="";
session_start();
if(isset($_SESSION["UserName"]))
echo "<b style='color:white'>".$_SESSION["UserName"]."</b>";
else
header("location:index.php");
$con=mysqli_connect("localhost","root","","notice");
if(!$con)
die("server could not connected");
if(isset($_POST["btn"]))
{
 $t=$_POST["txt"];
 $s="update college set notice='".$t."' where id=125";
 $check=mysqli_query($con,$s);
 if($check!=0)
  echo "<b style='color:#3DF1E9;font-family:Fixedsys;font-size:20px;position:absolute;left:130px;top:200px'>Updated successfully </b>";
 else
  echo "Unable to update";
}
$n="select notice from college where id=125";
$rs=mysqli_query($con,$n);
$notice=mysqli_fetch_assoc($rs);

?>
<a href="logout.php" class=" btn btn-info"><b>Logout</b></a>
<form action="<?php $_PHP_SELF ?>" method="post">
<section id="sec1">
 <p id='p'>NOTICE</p>
<textarea  style="width:530px;height:300px;text-indent:10px;font-family:Fixedsys;border:2px solid white;margin-left:8px;font-weight:bold" name="txt">
 <?php echo $notice["notice"]; ?>
</textarea>
</section>
<input style="background:#1FCE9C;color:white;font-weight:bold;position:absolute;top:155px;left:150px" type="submit" value="Update Notice" name="btn" class="btn">
</form>
</div>
</div>
</body>
</html>