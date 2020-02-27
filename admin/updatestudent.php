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
<table align="center" style="margin-top:10px; margin-bottom:10px;">
<form method="POST" action="updatestudent.php">

<tr>
    <th>enter standerd</th>
	<td><input type="number" name="std" placeholder="enter standerd" required></td>
	
	
	<th>Student name</th>
	<td><input type="text" name="sname" placeholder="enter student name" required></td>
	
     <td><input type="submit" name="search" value="search"></td>
   </tr>
   </form>
   </table>
   
   
   <table border="1" align="center" style="padding:10px; width:70%; margin-top:10px;">
   
   
 <tr bgcolor="black" style="color:white;">
    <th>NO</th>
	<th>img</th>
	<th>name</th>
	<th>Roll no</th>
	<th>operation</th>
	</tr>
   
   <?php
   if(isset($_POST['search']))
   {
	   include('../dbconn.php');
	   
	   $std=$_POST['std'];
	   $name=$_POST['sname'];
	   
	   $qry="SELECT * FROM `sdata` WHERE `standerd`='$std' AND `name` LIKE '%$name%'";
	   $run=mysqli_query($conn,$qry);
	   
	   if(mysqli_num_rows($run)<1){
		   
		   echo"<tr><td colspan='5'> no data found </td></tr>";
		  
		   
	   }
	   else{
		    $count=0;
			
			while($data=mysqli_fetch_assoc($run))
			
			{
				
				$count++;
				?>
				
				<tr align="center">
				    <td><?php echo $count;?></td>
					<td> <img src="../dataimg/<?php echo $data['img'];?>" style="max-width:150px;"></td>
					<td><?php echo $data['name'];?></td>
				<td><?php echo $data['rollno'];?></td>
				<td><a href="updateform.php?sid=<?php echo $data['id'] ?>">edit</a></td>
				</tr>
                 <?php
				
			}
		   
		   
	   }
	   
	  
   }
   
   
  ?>
   </table>
   </body>
   </html>