<!DOCTYPE html>
<html>
<head>  
<title> </title>
<style>
p{
  color: white;
  font-size: 300%;
  font-family:"Times";
  top: 150px;
  left:30px;
  position: absolute;
}
p1{
  color: white;
  font-size: 300%;
  font-family:"Times";
  top: 200px;
  left:90px;
  position: absolute;
}
p2{
  color: white;
  font-size: 300%;
  font-family:"Times";
  top: 250px;
  left:90px;
  position: absolute;
}
.ima1{
position: relative;
}
.ima2{
     position: absolute;
	 top: 300px;
   left: 1050px;
 
}
body{
  margin: 0;
  padding: 0px;
}
.center{
  position: absolute;
  top: 55%;
  left: 57%;
  transform: translate(-50%,-50%);
}

 .lom{
  list-style: none;
  position: absolute;
  border: 3px solid black;
  font-size: 15px;
  font-weight:bold;
  margin: 30px;
  border-radius: 15px;
  font-family:arial;
}
 a{
  text-decoration: bold;
  border: 3px solid black;
  position: absolute;
  padding: 15px 35px;
  display:black;
  text-align:center;
  
 
}
 
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link   href="stylenew.css"  rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<form id="form1" runat="server">
<div  class="ima1" >
<img src="aa.jpg" style="width: 100%; height: 750px; ">
<p>SEAT ALLOTMENT</p>
<p1>CHECKING</p1>
<p2>WEBSITE</p2>
<div  class="ima2" >
<img src="nmitlogo.jpg" style="width: 300px; height: 300px; ">
</div>
<div class="bg">
<div class="center" style="padding-left: 80px; padding-top:170px;">
<a href="login.php" style="background:skyblue;color: red; border-radius:8px;"><b>Student Login</b></a>
</div>
</div>
<div class="bg">
<div class="center" style="padding-left:80px; padding-top:0px;">
<a href="Teacherlogin.php" style="background:skyblue;color: red; border-radius:8px;"><b>Teacher Login</b></a>
</div>
</div>
</div>
</form>
</body>
</html>
