
<?php


 session_start();
			if(isset( $_SESSION['uid'])){
				
			echo "";
			}
			else{

	header('location:../login.php');
	
}



if(isset($_POST['submit']))
{       include("../dbconn.php");
	     $id=$_POST['sid'];
		 $rollno=$_POST['roll'];
		 $name=$_POST['name'];
		 $city=$_POST['city'];
		 $cnum=$_POST['mnumber'];
		 $std=$_POST['std'];
		 $imgname=$_FILES['simg']['name'];
		 $tempname=$_FILES['simg']['tmp_name'];
		 
		 
		 move_uploaded_file($tempname,"../dataimg/$imgname");
	  
	   $qry="UPDATE `sdata` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `cnumber` ='$cnum', `standerd` ='$std', `img` ='$imgname' WHERE  `id` = '$id';";
	 $run=mysqli_query($conn,$qry);
	if($run==true)
	{
        ?>
		<script>
		alert('data updated successfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
		</script>
 <?php
 
	}
	else
	{
		?>
		<script>
		alert("error data not updated");
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
		</script>
		<?php
		 
	}
}

?>


