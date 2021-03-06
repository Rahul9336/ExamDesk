<!DOCTYPE html>
<html lang="en">
	<head>
		<title>VM Level4</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		
var seconds_left = 10;
var interval = setInterval(function() {
    document.getElementById('timer_div').innerHTML = --seconds_left+'Seconds';

    if (seconds_left <= 0)
    {
        document.getElementById('timer_div').innerHTML = 'TimeOut';
        clearInterval(interval);
    }
}, 1000);
		</script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>
		<script
			src="script/level4.js">
		</script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="styles/styles.css">
		<link
			href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
			rel="stylesheet">
		<style>
			label > input{ /* HIDE RADIO */
			  visibility:hidden; /* Makes input not-clickable */
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
	width:110%;
	height:70%;
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
<br><br>				<div class="1 level">
					<!-- LEVEL 1 STARTS-->
					<br><br>
						<h3 class="labelno">Level 4</h3>
						<br>
						<h3>See The Images and Try to Remember It. Image Automatically Disappered In</h3> 
							 <form action="level4.php" method="POST">
						<div id="div1" style="display:none">							<!-- question 1 start -->
						<div id="timer_div" style="font-weight:bold;color:red"></div> 
						<div class="images" id="image1">
						<img  alt="boys"  src="images/boys.jpg"/>
						</div>
												<!-- question 1 End -->
						<div  id="answer" style="display:none">			<!-- Answer 1 Start -->
						<h5>  Click On  Item Only That Appear Recently </h5>
						<label class="images">
						  <input type="radio" name="vm41" value="mango"  />
						  <img  alt="apple"  src="images/mango.jpg" class="answer1"/>
						</label>
						<label class="images">
						  <input type="radio" name="vm41" value="boys"  />
						  <img  alt="apple"  src="images/boys.jpg" class="answer1"/>
						</label>
						<label class="images">
						  <input type="radio" name="vm41" value="guava" />
						  <img  alt="guava"  src="images/guava.jpg" class="answer1"/>
						</label>
						<label class="images ">
						  <input type="radio" name="vm41" value="grapes"  />
						  <img  alt="grapes"  src="images/grapes.jpg" class="answer1"/>
						</label>
						<label class="images">
						  <input type="radio" name="vm41" value="bus"  />
						  <img  alt="banana"  src="images/bus.jpg" class="answer1"/>
						</label>
						<br>
						<h1 onclick="next();" class="btn btn-primary" >Next Question</h1>
						<br>
						<br>
						</div>
						</div>	<!-- Answer 1 End -->									
						<div id="2ndq" style="display:none">			<!-- Question 2 start -->
						<div id="timer_div1" style="font-weight:bold;color:red"></div>
						<div class="images" id="image2" >
						<img  alt="tiger"  src="images/tiger.jpg"/>
						</div>
						<!-- Question 2 End -->
						<div  id="div2" style="display:none"> <!-- Answer 2 Start -->
						<h5>  Click On That Item Appear Recently </h5>
						<label class="images">
						  <input type="radio" name="vm42" value="hippo"  />
						  <img  alt="hippo"  src="images/hippo.jpg" class="answer2" />
						</label>
						<label class="images">
						  <input type="radio" name="vm42" value="monkey"  />
						  <img  alt="hippo"  src="images/monkey.jpg" class="answer2" />
						</label>
						<label class="images">
						  <input type="radio" name="vm42" value="lion"  />
						  <img  alt="hippo"  src="images/lion.jpg" class="answer2" />
						</label>
						<label class="images">
						  <input type="radio" name="vm42" value="tiger"  />
						  <img  alt="hippo"  src="images/tiger.jpg" class="answer2" />
						</label>
						<label class="images">
						  <input type="radio" name="vm42" value="elephant"  />
						  <img  alt="hippo"  src="images/elephant.jpg" class="answer2" />
						</label>
						<br>
						<h1 onclick="next1();" class="btn btn-primary">Next Question</h1>
						<br>
						<br>
						</div>
						</div> <!-- Answer 2 End -->
					
					 <div id="3rdq" style="display:none"> <!-- Question 3 Start -->
						<div id="timer_div2" style="font-weight:bold;color:red"></div>
						<div class="images" id="image3">
						<img  alt="truck"  src="images/truck.jpg"/>
						</div>
						<div  id="answer3" style="display:none">
						<h5>  Click On That Item Appear Recently </h5>
						<label class="images">
						  <input type="radio" name="vm43" value="bus"  />
						  <img  alt="bus"  src="images/bus.jpg" class="answer3" />
						</label>
						<label class="images">
						  <input type="radio" name="vm43" value="car"  />
						  <img  alt="car"  src="images/car.jpg" class="answer3" />
						</label>
						<label class="images">
						  <input type="radio" name="vm43" value="truck"  />
						  <img  alt="truck"  src="images/truck.jpg" class="answer3" />
						</label>
						<label class="images">
						  <input type="radio" name="vm43" value="cycle"  />
						  <img  alt="cycle"  src="images/cycle.jpg" class="answer3" />
						</label>
						<label class="images">
						  <input type="radio" name="vm43" value="apple"  />
						  <img  alt="apple"  src="images/apple.jpg" class="answer3" />
						</label>
						<input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl4vm" onclick="stopTimer();" class="btn btn-primary">Submit</button><br><br>
						</div>
						</div>																					
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl4vm']))
{
	$cat="Visual_memory";
	$q1=$_POST['vm41'];
	$q2=$_POST['vm42'];
	$q3=$_POST['vm43'];
	$times=$_POST['timer'];
	$query="insert into level4 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 4 Succesfully Submitted')</script>";
		echo "<script>window.open('./figure_ground_perception/level1.php','_self')</script>";

		}
}
?>
</div>
						</div>						<!-- LEVEL 1 ENDS-->
					  
						
			
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