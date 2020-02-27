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


?>
<div class="admintitle">

<h4><a href="../logout.php"  style="float:right; margin-right:30px; font-size:25px; color:white;">Log Out</a></h4>
<h2>WELCOME TO ADMINDASH BOARD</h2>

</div>



<div class="dashboard">
<table width="50%" align="center" border="1">
       <tr>
	   <td>1</td><td><a href='insertstudent.php'>inset student details</a></td>
	   
	   </tr>
	   <tr>
	   <td>2</td><td><a href='updatestudent.php'>update student details</a></td>
	   
	   </tr>
	   <tr>
	   <td>3</td><td><a href='deletestudent.php'>detete student details</a></td>
	   
	   </tr>
	   
</div>
</body>
</html>
