<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="${js}/intial.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles/styles.css">
<link
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
	rel="stylesheet">
        <title></title>
		<?php
		include("connect.php");
		?>
		
    </head>
    <body>
	<div style="width:40%; padding:25px; margin:auto;"><br>
	<h1 style="color:blue;"><b>ADMIN PANEL</b></h1><br><br><br>
		<form action="index.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="admin_email">
  </div>
  <div class="form-group">
    <label for="pwdquery">Password:</label>
    <input type="password" class="form-control" id="pwd" name="admin_pass">
  </div>
  
  <input type="submit" class="btn btn-default" name="submit"/>
</form>
</div>

	<?php
	if(isset($_POST['submit']))
	{
	global $con;
	$email=$_POST['admin_email'];
	$pass=$_POST['admin_pass'];
	$query="select * from admin where admin_email='$email' AND admin_pass='$pass'";
	
        $run=mysqli_query($con,$query);
		if($run)
			$check=mysqli_num_rows($run);
		if($check>0)
			echo"<script>window.open('admin_panel.php','_self')</script>";
		else
			echo"access denied";
			
	}	
        ?>
    </body>
</html>
