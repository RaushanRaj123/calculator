<?php
 session_start();
			if(isset( $_SESSION['uid'])){
				
			echo '';
			}
			else{

	header('location:../login.php');
	
}
			
?>
<?php
include("header.php");
include("titlehead.php");

?>
<h2 align="center">insert new student details </h2>
<form method="POST" action="insertstudent.php" enctype="multipart/form-data">


<table align="center" style="width:70%; margin-top:40px;" border="1">
         
  <tr>
	   <td>ROLL NO</td><td><input type="number" name="roll" required></td>
 </tr>
<tr>
	   <td>STUDENT NAME</td><td><input type="text" name="name" required></td>
 </tr>
 <tr>
	   <td>CITY</td><td><input type="text" name="city" required></td>
 </tr>
 <tr>
	   <td>CONTACT NUMBER</td><td><input type="phone" name="mnumber" required></td>
 </tr>
 <tr>
	   <td>STANDERD</td><td><input type="number" name="std" required></td>
 </tr>
 <tr>
	   <td>STUDENT IMAGE</td><td><input type="file" name="simg" required></td>
 </tr>
 <tr>
	   <td colspan="2" align="center"><input type="submit" name="submit" value="submit"required></td>
 </tr>
</table>
<?php

if(isset($_POST['submit']))
{       include("../dbconn.php");
	     
		 $rollno=$_POST['roll'];
		 $name=$_POST['name'];
		 $city=$_POST['city'];
		 $cnum=$_POST['mnumber'];
		 $std=$_POST['std'];
		 $imgname=$_FILES['simg']['name'];
		 $tempname=$_FILES['simg']['tmp_name'];
		 
		 
		 move_uploaded_file($tempname,"../dataimg/$imgname");
	  
	   $qry="INSERT INTO `sdata`( `rollno`, `name`, `city`, `cnumber`, `standerd`,`img`) VALUES ('$rollno','$name','$city','$cnum','$std','$imgname')";
	 $run=mysqli_query($conn,$qry);
	if($run)
	{
        ?>
		<script>
		alert('data inserted successfully');
		</script>
 <?php
 
	}
	else
	{
		?>
		<script>
		alert("error");
		</script>
		<?php
	}
}

?>










</body>
</html>