<html>

<h1><center>logged in Successfully</center></h1>
<table border='1'>
   <tr>
   <th>USN</th>
   <th>STUDENTNAME</th>
   <th>ROOM_NO</th>
   <th>SEAT_NO</th>
   <th>SUBJECT CODE</th>
   <th>SUBJECT NAME</th>
   </tr>
</html>
<?php
session_start(); 
$conn= mysqli_connect("localhost","root","","seatarr");
   $usn=$_SESSION['user_name'];
   $result=mysqli_query($conn,"select student.usn,student.sname,seat_no,roomno,scode,subject.sname as name from student,allrooms,subject where student.usn=allrooms.usn and student.usn='$usn'
   and (subject.dno,subject.sem)in(select dno,sem from student where usn='$usn');");
   while($row=mysqli_fetch_array($result))
   {
	   ?>
	  <tr>
	   <td><?php echo $row['usn']?></td>
	   <td><?php echo $row['sname']?></td>
	   <td><?php echo $row['roomno']?></td>
       <td><?php echo $row['seat_no']?></td>
	   <td><?php echo $row['scode']?></td>
	   <td><?php echo $row['name']?></td>
	</tr>
  <?php }?>
   </table>
  <?php mysqli_close($conn);
	 ?>