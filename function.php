<?php


     function showdetails($std,$rollno)
	 {
	  include('dbconn.php');
	  
	  
	  $qry="SELECT `id`, `rollno`, `name`, `city`, `cnumber`, `standerd`, `img` FROM `sdata` WHERE `standerd`='$std' AND `rollno`='$rollno';";

    $run=mysqli_query($conn,$qry);
	
	if(mysqli_num_rows($run)>0)
		
		{
			
			$data=mysqli_fetch_assoc($run);
			?>
			<table align="center"  border="2" style="padding:10px; width:50%;">
			<tr>
			<th colspan="3">student details</th>
			</tr>
			<tr>
			
			<td rowspan="5"><img src="dataimg/<?php echo $data['img'];?>" style="width:300px; height:300px"></td>
			<th>ROLL NO </th>
			<td><?php echo $data['rollno']; ?> </td>
			</tr>
			
			<tr>
			<th>NAME</th>
			<td><?php echo $data['name']; ?></td>
			</tr>
			
			<tr>
			<th>STANDERD</th>
			<td><?php echo $data['standerd']; ?></td>
			</tr>
			<tr>
			<th>contact number</th>
			<td><?php echo $data['cnumber']; ?></td>
			</tr>
				<tr>
			<th>city</th>
			<td><?php echo $data['city']; ?></td>
			</tr>
			
			</table>
			
			<?php
		}
     else
	 {
		 
		 echo "<script> alert('no data found');</script>";
	 }
	
	 }
	 

?>