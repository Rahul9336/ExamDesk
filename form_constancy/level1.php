<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Level1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
			<div class="col-sm-3" style="width:20%">
			<?php
include("../sbcategory.php");
?>
			</div>
			<div class="col-sm-6" style="width:60%">
<br><br>					<div class="1 level"> 
					<!-- LEVEL 1 STARTS-->
						<h3 class="labelno">Level 1</h3>
				<form action="level1.php" method="POST">
						<p>1.	TAP ON THE SQUARE </p>
						<label>
						  <input type="radio" name="fcL11" value="a" />
						  <img src="images/fc/fcL11.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL11" value="b" />
						  <img src="images/fc/fcL12.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL11" value="c" />
						  <img src="images/fc/fcL13.png" width="50%" height="30%"/>
						</label>
						<br>
						 <br>

						 <br>

						<p>2.	TAP ON THE CIRCLE  </p>
						<label>
						  <input type="radio" name="fcL12" value="a" />
						  <img src="images/fc/fcL14.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL12" value="b" />
						  <img src="images/fc/fcL15.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL12" value="c" />
						  <img src="images/fc/fcL16.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL12" value="d" />
						  <img src="images/fc/fcL17.png" width="50%" height="30%"/>
						</label><br>
						 <br>
						 
						 <p>3.	TAP ON THE TRIANGLE </p>
						<label>
						  <input type="radio" name="fcL13" value="a" />
						  <img src="images/fc/fcL18.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL13" value="b" />
						  <img src="images/fc/fcL19.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL13" value="c" />
						  <img src="images/fc/fcL110.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL13" value="d" />
						  <img src="images/fc/fcL111.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL13" value="e" />
						  <img src="images/fc/fcL112.png" width="50%" height="30%"/>
						</label><br>
						 <br>
						 <br><br>
						 <input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl1fc" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl1fc']))
{
	$cat="form_constancy";
	$q1=$_POST['fcL11'];
	$q2=$_POST['fcL12'];
	$q3=$_POST['fcL13'];
	$times=$_POST['timer'];
	$query="insert into level1 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	echo $query;
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 1 Succesfully Submitted')</script>";
		echo "<script>window.open('level2.php','_self')</script>";

		}
}
?>
						</div>						<!-- LEVEL 1 ENDS-->
					  
				</div>			
			
			<div class="col-sm-3" id="rightbar2" style="width:20%">
			<br><br>
			<div id="rightbar"></div>
			
			
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