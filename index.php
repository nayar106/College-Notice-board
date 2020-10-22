<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style type="text/css">
  #c1,#c2,#c3{
       color:white;
        font-variant:small-caps;
        cursor:pointer;
       font-weight:bold;
       font-size:20px;
       line-height:45px;
        }
     #btn1{
           padding:5px 40px;
           margin-left:0px;
           margin-top:20px;
           }
         #btn2,#btn3{
           padding:5px 20px;
           margin-left:0px;
           margin-top:20px;
           } 
   #reg{
        background-color:#777FE2;
        height:250px;
       max-width:350px;
        margin-left:60px;
        color:white;
        display:none;
         box-sizing:border-box;
       }
        #reg1{
        background-color:#777FE2;
        height:150px;
        max-width:350px;
        
        margin-left:510px;
        color:white;
        display:none;
        box-sizing:border-box;
       }
       #reg2{
        background-color:#777FE2;
        height:150px;
        max-width:350px;
        margin-left:auto;
        color:white;
        display:none;
         box-sizing:border-box;
       }
      #bd{
           height:800px;
         }
       input{
          border:2px solid #777FE2;
          margin-left:10px;
          margin-top:6px;
          border-radius:4px;
          padding:5px 10px;
          color:black;
          }
     
</style>
<script>
$(document).ready(function(){
 $("#c1").click(function(){
  $("#reg").slideToggle("fast");
   $("#reg1").hide("fast");
   $("#reg2").hide("fast");
    $("#server1").hide("fast");
     $("#server2").hide("fast");
      $("#server3").hide("fast");
});
$("#c2").click(function(){
  $("#reg1").slideToggle("fast");
   $("#reg").hide("fast");
    $("#reg2").hide("fast");
     $("#server1").hide("fast");
      $("#server2").hide("fast");
       $("#server3").hide("fast");
});
$("#c3").click(function(){
  $("#reg2").slideToggle("fast");
   $("#reg").hide("fast");
    $("#reg1").hide("fast");
     $("#server1").hide("fast");
      $("#server2").hide("fast");
       $("#server3").hide("fast");
});
$("#bd").click(function(){
     $("#server1").hide("fast");
      $("#server2").hide("fast");
       $("#server3").hide("fast");
});
});
</script>
</head>
<body  style="background-color:#777FE2">
<div class="container-fluid">
<div class="row">
<div id="c1" class="col-md-4 col-sm-4  text-center" style="background-color:#72CDCD;height:50px">Student Registeration</div>
<div id="c2" class="col-md-4 col-sm-4 text-center" style="background-color:#72CDCD;height:50px">Student Login</div>
<div id="c3" class="col-md-4 col-sm-4 text-center" style="background-color:#72CDCD;height:50px">College Login</div>
<div id="bd">
<form action="reg1.php" method="post">
<div id="reg">
<table >
<tr><th>Name</th><td><input type="text" required name="name1"></td></tr>
<tr><th>Email Id</th><td><input type="email" required name="email1"></td></tr>
<tr><th>Contact No</th><td><input type="number" required name="no1"></td></tr>
<tr><th>Roll No</th><td><input type="text" required name="roll1"></td></tr>
<tr><th>Password</th><td><input type="password" required name="password1"></td></tr>
<tr><th>Confirm Password</th><td><input type="password" required name="cmp1"></td></tr>
</table>
<input id="btn1" type="submit" value="Register" class="btn-success" name="button1">
</div>
<div id="server1" style="margin-top:100px;margin-left:100px">
<?php
if(isset($_GET["data"]))
 echo $_GET["data"];
?>
</form>
</div >

<form action="login.php" method="post">
<div id="reg1">
<table >
<tr><th>Username</th><td><input type="email" required name="email2"></td></tr>
<tr><th>Password</th><td><input type="password" required name="password2"></td></tr>
</table>
<input id="btn2" type="submit" value="Login" class="btn-success" name="button2">
</div>
<div id="server2" style="margin-left:550px;margin-top:100px">
<?php
if(isset($_GET["err"]))
 echo $_GET["err"];
?>
</div>
</form>
<form action="collegelogin.php" method="post">
<div id="reg2">
<table >
<tr><th>Username</th><td><input type="email" required name="email3"></td></tr>
<tr><th>Password</th><td><input type="password" required name="password3"></td></tr>
</table>
<input id="btn3" type="submit" value="Login" class="btn-success" name="button3">
</div>
<div id="server3" style="margin-top:100px;margin-left:1000px">
<?php
if(isset($_GET["data1"]))
 echo $_GET["data1"];
?>
</div>
</form>
</div>
</div>
</div>
</body>
</html>

