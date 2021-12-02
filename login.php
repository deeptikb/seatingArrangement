<html>
<head>

<title>ALLOTMENTS</title></head>
<body>
<style type="text/css">
body{
	background-image:url('seat.jpg');
	background-repeat: no repeat;
	background-size: cover;
	background-attachment: fixed;
	
}
.parentcontainer{
	display:table;
	height:100%;
	margin:0 auto;
}
.container{
	display:table-cell;
	vertical-align:middle;
}
td.noborder{
	border:0;
}
</style>
<div  class="parentcontainer">
<div cl ass="container">
<table class="noborder" style="background-color:rgba(0,0,0,0.2);border-radius:20px;" width="450" height="250">
<form action="" method="post">
<tr> 
      <td align="center" colspan="5"  class="noborder" style="color:yellow;font-size:35px;">Login Here</td>
	  </tr>
	  <tr>
      <td class="noborder" style="color:purple;">EMAIL ADDRESS</td>
	  <td class="noborder" ><input type="text" name="emailid" style="width:250px;border:0;border-radius:10px;height:30px;" placeholder="XXXX@gmail.com" required></td>
</tr>
<tr>  
      <td class="noborder" style="color:purple;">PASSWORD</td>
	  <td class="noborder"><input type="password" name="password" style="border:0;border-radius:1 0px;height:30px;" placeholder="password" required></td>
</tr>
<tr>  <td class="noborder" colspan='5' align="center"><input type="submit" value="signup" name="signup"></td></tr>
</table>
<?php
if(isset($_GET['error'])==true){
	echo '<font color=red><p align="center">Wrong emailid or password</p></font>';
}
?>
</form>
</div>
</div>
 </body>
</html>

<?php
session_start();?>
<?php
$conn= mysqli_connect("localhost","root","","seatarr");
if(isset($_POST['signup']))
 {
	 $pass=$_POST['password'];
	 $emailid=$_POST['emailid'];
	 $query=mysqli_query($conn,"select * from student where usn='$pass' && email_id='$emailid'");
	 $rowcount=mysqli_num_rows($query);
	 if($rowcount==true)
	 {
		 $_SESSION['user_name']=$pass;
		 header('Location: checking.php'); 	
	 }
	 else
	 {
		 header('Location:login.php?error=1');
	 }
 }
 

?>  