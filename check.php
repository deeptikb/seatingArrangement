<html>

<h1><CENTER>logged in successfully</CENTER></h1>
<table border='1'>
   <tr>
   <th>IDNO</th>
   <th>INVIGILATOR NAME</th>
   <th>DEPARTMENT NAME</th>
   <th>ROOM_NO</th>
   </tr>
</html>
<?php
session_start(); 
$conn= mysqli_connect("localhost","root","","seatarr");
   $idno=$_SESSION['user_name'];
   $result=mysqli_query($conn,"select inv_id,room_no,iname,dno from allot_inv,invigilator where invigilator.idno=allot_inv.inv_id and inv_id='$idno'");
   while($row=mysqli_fetch_array($result))
   {
	   ?>
	  <tr>
	   <td><?php echo $row['inv_id']?></td>
	   <td><?php echo $row['iname']?></td>
	   <td><?php echo $row['dno']?></td>
       <td><?php echo $row['room_no']?></td>
	   
	</tr>
  <?php }?>
   </table>
  <?php mysqli_close($conn);
	 ?>