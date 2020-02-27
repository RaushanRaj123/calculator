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
include("../dbconn.php");

$id=$_GET['sid'];

$qry="SELECT * FROM `sdata` WHERE `id`='$id'";
$run=mysqli_query($conn,$qry);

$data=mysqli_fetch_assoc($run);

?>

<form method="POST" action="updatedata.php" enctype="multipart/form-data">


<table align="center" style="width:70%; margin-top:40px;" border="1">

  <tr>
	   <td>ROLL NO</td><td><input type="number" name="roll" value="<?php echo $data['rollno']; ?>" required></td>
 </tr>
<tr>
	   <td>STUDENT NAME</td><td><input type="text" name="name" value="<?php echo $data['name'] ?>" required></td>
 </tr>
 <tr>
	   <td>CITY</td><td><input type="text" name="city" value="<?php echo $data['city'] ?>" required></td>
 </tr>
 <tr>
	   <td>CONTACT NUMBER</td><td><input type="phone" name="mnumber"  value="<?php echo $data['cnumber'] ?>" required></td>
 </tr>
 <tr>
	   <td>STANDERD</td><td><input type="number" name="std" value="<?php echo $data['standerd'] ?>"required></td>
 </tr>
 <tr>
	   <td>STUDENT IMAGE</td><td><input type="file" name="simg"  required></td>
 </tr>
 <tr>
	   <td colspan="2" align="center">
	   <input type="hidden" name="sid" value="<?php echo $id; ?>">
	   <input type="submit" name="submit" value="submit"required></td>
 </tr>
</table>
</form>

</body>
</html>