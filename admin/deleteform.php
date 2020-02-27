
<?php
 
      include("../dbconn.php");
	     $id=$_REQUEST['sid'];
		 
	   $qry="DELETE FROM `sdata` WHERE `id`='$id';";
	 $run=mysqli_query($conn,$qry);
	if($run)
	{
        ?>
		<script>
		alert('data deleted successfully');
		window.open('deletestudent.php','_self');
		</script>
 <?php
 
	}
	else
	{
		?>
		<script>
		alert("error data not deleted");
		window.open('deletestudent.php','_self');
		</script>
		<?php
		 
	}


?>


