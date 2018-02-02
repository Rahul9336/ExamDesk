<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
		</script>
		<script src="${js}/intial.js"></script>
		<script>
				//Stop timer function
function stopTimer() {
    clearInterval(time);
	
	}

//Start timer function
var secTime = 0,
      minTime = 0,
      hourTime = 0;

var time =  setInterval(function(){
    var maxSec = 59,
        maxMin = 59,
        maxHour = 59;
if(secTime > maxSec){
      minTime++;
      if(minTime > maxMin){
        hourTime++;
        if(hourTime > maxHour){
          hourTime = 0;
          minTime = 0;
          secTime = 0;
        }
        minTime = 0
      }
      secTime = 0;
    }    
         var newSec = (secTime.toString().length == 1) ? '0' + secTime : secTime,
            newMin = (minTime.toString().length == 1) ? '0' + minTime : minTime,
            newHour = (hourTime.toString().length == 1) ? '0' + hourTime : hourTime;

        document.getElementById('rightbar').innerHTML = newHour + ':' + newMin + ':' + newSec;
    secTime++;
document.getElementById('times').value =newHour+':'+newMin+':'+newSec;    
}, 1000);
		</script>
		<script>
		
		var timestart=performance.now();
		
		function end(){
		var timeend=performance.now();
		var exetime=timeend-timestart;
		
		}
		
		</script>
		
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="styles/styles.css">
		<link
			href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
			rel="stylesheet">
		<style>
			label > input{ /* HIDE RADIO */
			  visibility: hidden; /* Makes input not-clickable */
			  position: absolute; /* Remove input from document flow */
			}
			label > input + img{ /* IMAGE STYLES */
			  cursor:pointer;
			  border:2px solid transparent;
			}
			label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
			  border:2px solid #f00;
			  
			}
			img{
				width:40%;
				height:40%;
			}
			.labelno{
				border:2px solid black;
				
			}
		</style>
	</head>
	<body onload="startTime();">
		<div class="row">
			<div class="col-sm-3" >
			<?php
include("../sbcategory.php");
?>
			</div>
			<div class="col-sm-6">
			<br><br>
<div class="5 level">						<!-- LEVEL 5 STARTS-->
					<form action="level5.php" method="post">
						 <h3 class="labelno">Level 5</h3>
						<br>
						<p>WHAT DO YOU SEE IN THIS IMAGE  </p>
						<p>1.	WHAT SHAPES ARE THESE ? </p>
						<img src="images/fc/fcL51.png" width="50%" height="30%"/> <br>
						<input type="radio" name="fcL51" value="a" />A)	RECTANGLE AND SQUARE   <br>
						<input type="radio" name="fcL51" value="b" />B)	RECTANGLES    <br>
						<input type="radio" name="fcL51" value="c" />B)	SQUARE AND SQUARE     <br>
						<input type="radio" name="fcL51" value="d" />B)	PARELLOGRAMS     <br>

						<p>2.	HOW MANY SQUARES ARE THERE IN THESE IMAGES  </p>
						<img src="images/fc/fcL52.jpg" width="50%" height="30%"/> <br>
						<input type="radio" name="fcL52" value="a" />A)	TWO   <br>
						<input type="radio" name="fcL52" value="b" />B)	FIVE    <br>
						<input type="radio" name="fcL52" value="c" />B)	THREE     <br>
						<input type="radio" name="fcL52" value="d" />B)	TWELEVE     <br>
						<p>3.	HOW MANY SQUARES ARE THERE IN THE PICTURE </p>
						<img src="images/fc/fcL53.jpg" width="50%" height="30%"/> <br>
							<input type="radio" name="fcL53" value="a" />A)	FIVE   <br>
						<input type="radio" name="fcL53" value="b" />B)	FOUR    <br>
						<input type="radio" name="fcL53" value="c" />B)	EIGHT     <br>
						<input type="radio" name="fcL53" value="d" />B)	SIX     <br>
						<input type="hidden" name="timer" id="times"/>
						<br>
						<button type="submit" class="btn btn-primary" name="lvl5fc" onclick="stopTimer();">Submit</button>
						<br>
						<br>
						 </form>
						
						<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl5fc']))
{
	$cat="form_constancy";
	$q1=$_POST['fcL51'];
	$q2=$_POST['fcL52'];
	$q3=$_POST['fcL53'];
	$times=$_POST['timer'];
	$query="insert into level5 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";

	$run2=mysqli_query($con,$query);
	if($run2){
		echo "<script>alert('Level 5 Succesfully Submitted. Move to Next Category')</script>";
		echo "<script>window.open('../visual_memory/level.php','_self')</script>";

		}
}
?>
						
						
					</div></div>
								<div class="col-sm-3" id="rightbar2">
			<br><br>
			<div id="rightbar">
			
			</div>
			
			<div class="table-responsive">  
	<?php     
			$query="select * from level1 where patient_id='3' AND category='form_constancy'";
			global $con;
			$run=mysqli_query($con,$query);
			$p=mysqli_fetch_array($run);
			?>			
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
        <th>Q5</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Level 1</td>
        <td><?php echo $p['q1'];?></td>
        <td><?php echo $p['q2'];?></td>
        <td><?php echo $p['q3'];?></td>
        <td><?php echo $p['q4'];?></td>
        <td><?php echo $p['q5'];?></td>
      </tr>
    </tbody>
  </table>
  </div>
		</div></div>
		
	</body>
</html>