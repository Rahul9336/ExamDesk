<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PSI Level5</title>
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
			.images {
    display: inline-block;
	width:30%;
	height:50%;
	margin: 5px;
			} 
			.ipm {
    display: inline-block;
	width:70%;
	height:50%;
	margin: 5px;
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
					<!-- LEVEL 5 STARTS-->
						<h3 class="labelno">Level 5</h3>
				<form action="level5.php" method="POST">
						<b>1.	ARRANGE THE PUZZLES </b>
						<div>
						 <div class="images">
						  <img src="images/pisL418.png" />
						  <br>
						  <span style="font-size:25px">B</span>
						</div>
						<div class="images">
						  <img src="images/pisL419.png" />
						  <br>
						  <span style="font-size:25px">C</span>
						</div>
						<div class="images">
						  <img src="images/pisL420.png" />
						  <br>
						  <span style="font-size:25px">A</span>
						</div></div>
						<br>
						
						<div class="ipm"><img src="images/pisL421.png" /></div>
						<div class="ipm" style="width:30%"><img src="images/pisL422" /><br>THE ARRANGED PUZZLE</div>
						<br>
						
						<br><br>
						<input type="radio" name="pis11" value="a"/><strong>A) ['A','B','C']</strong><br><br>
						<input type="radio" name="pis11" value="b"/><strong>B) ['B','C','A']</strong><br><br>
						<input type="radio" name="pis11" value="c"/><strong>C) ['B','A','C']</strong><br><br>
						<b>2.	ARRANGE THE PUZZLES </b>
						<div>
						 <div class="images">
						  <img src="images/pisL423.png" />
						  <br>
						  <span style="font-size:25px">B</span>
						</div>
						<div class="images">
						  <img src="images/pisL424.png" />
						  <br>
						  <span style="font-size:25px">C</span>
						</div>
						<div class="images">
						  <img src="images/pisL425.png" />
						  <br>
						  <span style="font-size:25px">A</span>
						</div></div>
						<br>
						
						<div class="ipm"><img src="images/pisL426.png" /></div>
						<div class="ipm" style="width:30%"><img src="images/pisL427" /><br>THE ARRANGED PUZZLE</div>
						<br>
						
						<br><br>
						<input type="radio" name="pis21" value="a"/><strong>A) ['A','B','C']</strong><br><br>
						<input type="radio" name="pis21" value="b"/><strong>B) ['B','C','A']</strong><br><br>
						<input type="radio" name="pis21" value="c"/><strong>C) ['B','A','C']</strong><br><br>
						
						<b>3.	ARRANGE THE PUZZLES </b>
						<div>
						 <div class="images">
						  <img src="images/pisL428.png" />
						  <br>
						  <span style="font-size:25px">B</span>
						</div>
						<div class="images">
						  <img src="images/pisL429.png" />
						  <br>
						  <span style="font-size:25px">C</span>
						</div>
						<div class="images">
						  <img src="images/pisL430.png" />
						  <br>
						  <span style="font-size:25px">A</span>
						</div></div>
						<br>
						
						<div class="ipm"><img src="images/pisL431.png" /></div>
						
						<br>
						
						<br><br>
						<input type="radio" name="pis31" value="a"/><strong>A) ['A','B','C']</strong><br><br>
						<input type="radio" name="pis31" value="b"/><strong>B) ['B','C','A']</strong><br><br>
						<input type="radio" name="pis31" value="c"/><strong>C) ['A','C','B']</strong><br><br>
						
						 <input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl1pis" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl1pis']))
{
	$cat="Position_in_space";
	$q1=$_POST['pis11'];
	$q2=$_POST['pis21'];
	$q3=$_POST['pis31'];
	$times=$_POST['timer'];
	$query="insert into level5 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	echo $query;
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Position_in_space Successfully Submitted.')</script>";
		echo "<script>window.open('../form_constancy/level.php','_self')</script>";

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