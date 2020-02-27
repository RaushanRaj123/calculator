<?php
//start_session();




?>


<!DOCTYPE html>
<html>

<head>
<title>
student management system

</title>

</head>
<body>
<div class="iheader">

<h1 align="center">WELLCOME STUDENT MANAGEMENT SYSYTEM</h1>

<h3 align="right"><a href="login.php">Admin login</a></h3>

</div>


<form action="index.php" method="POST">

  <table align="center" style="width:50%" border="1">

       <tr>
            <th colspan="2" align="center">student information</th>
        </tr>

        <tr>
		     <td>choose standerd</td>
			 
			 
			 <td>
			 <select name="std">
			       <option value="1">1st</option>
                    <option value="2">2st</option>
                     <option value="3">3st</option>
                     <option value="4">4st</option>
                      <option value="5">5st</option>
                      <option value="6">6st</option>
                        <option value="7">7st</option>      
                        <option value="8">8st</option>
                        <option value="9">9st</option>
                         <option value="10">10st</option>
                         <option value="11">11st</option>
						 <option value="12">12st</option>
					</select>
                   </td>
         </tr>
         <tr>
              <td>Enter roll no</td>
               <td><input type="text" name="rollno" required></td>			  
		</tr>	
        <tr>
		<td colspan="2" align="right"><input type="submit" name="submit" value="show info"></td>
		
		</tr>
	 </table>       

<?php
if(isset($_POST['submit']))
{
	$std=$_POST['std'];
	$rollno=$_POST['rollno'];
	
	
	include('dbconn.php');
	include('function.php');
	showdetails($std,$rollno);
	
}



?>



	 
</body>
</html>