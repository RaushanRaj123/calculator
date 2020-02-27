<?php
include('dbconn.php');
session_start();

if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>





<!DOCTYPE html>
<html>

<head>
<title>
student management system

</title>

</head>
<body>
<h2><a href="index.php"> go to home page</a></h2>
<h1 align="center"> Admin login</h1>

<form action="login.php" method="POST">

    <table align="center" border="1">
           <tr>
		       <td>Username</td>
			   <td><input type="text" name="username" required></td>
			</tr>

             <tr>			
		         <td>Password</td>
		     <td><input type="password" name="password" required></td>
			 
			 </tr>
			 <tr>
			 <td colspan="2" align="right"><input type="submit" name="submit" value="submit"></td>
			 
		   </tr>
   </table>
</form>
</body>
</html>

<?php
       if(isset($_POST['submit']))
	   {
		   $username=$_POST['username'];
		   $password=$_POST['password'];
		   $query="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
		   $run=mysqli_query($conn,$query);
		   $row=mysqli_num_rows($run); 
		   if($row<1)
		  { ?>
	   <script>
	   
	   alert('usernamae or password not match');
	   window.open('login.php','_self');
	   </script>
	   <?php
		}
		  
			   
		else   
		   { 
			   $data=mysqli_fetch_assoc($run);
			   
			  $id=$data['id'];
			 $_SESSION['uid']=$id;
			header('location:admin/admindash.php');
		   }
	   }
	   ?>
	   


