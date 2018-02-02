<?php
include("connect.php");
if(isset($_POST['lvl1fc']))
{
	$cat="form constancy";
	$q1=$_POST['fcL11'];
	$q2=$_POST['fcL12'];
	$q3=$_POST['fcL13'];
	$query="insert into level1 (category,q1,q2,q3)value('$cat','$q1','$q2','$q3')";
	mysqli_query($con,$query);
}
?>