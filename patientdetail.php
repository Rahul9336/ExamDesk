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
	<h1 style="color:blue;"><b>PATIENT DETAILS</b></h1><br><br><br>
		<form action="patientdetail.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="patient_name">
  </div>
  <div class="form-group">
    <label for="dob">Date Of Birth:</label>
    <input type="date" class="form-control" id="dob" name="patient_dob">
  </div>
   <div class="form-group">
    <label for="addr">Address:</label>
    <input type="text" class="form-control" id="addr" name="patient_addr">
  </div>
  <input type="submit" class="btn btn-default" name="submit"/>
</form>


	<?php
	if(isset($_POST['submit']))
	{
		global $con;
		$name=$_POST['patient_name'];
		$dob=$_POST['patient_dob'];
		$addr=$_POST['patient_addr'];
		$query=("insert into patient_details(patient_name,patient_dob,patient_addr)value('$name','$dob','$addr')");
		$run=mysqli_query($con,$query);
		if($run)
		echo"added";
		else
			echo"try again";
		}
        ?></div>
    </body>
</html>
