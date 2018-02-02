<!DOCTYPE html>
<html lang="en">
	<head>
		<title>VM Level2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script
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
			src="script/level3.js">
		</script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="styles/styles.css">
		<link
			href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
			rel="stylesheet">
		<style>
			label > input{ /* HIDE RADIO */
			   /* Makes input not-clickable */
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
	width:45%;
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
<br><br>				<div class="1 level">
					<!-- LEVEL 1 STARTS-->
					<br><br>
						<h3 class="labelno">Level 3 </h3>
						<br>
						<h3>See The Images and Try to Remember It Image Automatically Disappered In</h3> 
							 <form action="level3.php" method="POST">
						<div id="div1" style="display:none">							<!-- question 1 start -->
						<div id="timer_div" style="font-weight:bold;color:red"></div> 
						<div class="images" id="image1">
						1<img  alt="boys"  src="images/boys.jpg"/>
						</div>
						<div class="images" id="image2">
						2<img  alt="tv"  src="images/tv.jpg"/>
						</div>
						<div class="images" id="image3">
						3<img  alt="truck"  src="images/truck.jpg"/>
						</div>
						<div class="images" id="image4">
						4<img  alt="bus"  src="images/bus.jpg"/>
						</div>
						<div class="images" id="image5">
						5<img  alt="apple"  src="images/apple.jpg"/>
						</div>						<!-- question 1 End -->
						<div  id="answer" style="display:none">			<!-- Answer 1 Start -->
						<h5>  Click On That Item Appear Recently </h5>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a1" onclick="a(this.id);" />
						  <img  alt="apple"  src="images/mango.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a2" onclick="a(this.id);" />
						  <img  alt="apple"  src="images/banana.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a3" onclick="a(this.id);" />
						  <img  alt="guava"  src="images/guava.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a4" onclick="a(this.id);" />
						  <img  alt="grapes"  src="images/grapes.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a5" onclick="a(this.id);" />
						  <img  alt="banana"  src="images/apple.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a6" onclick="a(this.id);" />
						  <img  alt="apple"  src="images/mango.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a7" onclick="a(this.id);" />
						  <img  alt="apple"  src="images/banana.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a8" onclick="a(this.id);" />
						  <img  alt="guava"  src="images/guava.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a9" onclick="a(this.id);" />
						  <img  alt="grapes"  src="images/grapes.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a10" onclick="a(this.id);" />
						  <img  alt="banana"  src="images/apple.jpg"/>
						</label>
						<br>
						<p id="vmq1" style="display:none" ></p>
						<input  name="vm31" id="vm31" type="hidden" />
						<h1 onclick="next();" class="btn btn-primary" >Next Question</h1>
						<br>
						<br>
						</div>
						</div>	<!-- Answer 1 End -->									
						<div id="2ndq" style="display:none">			<!-- Question 2 start -->
						<div id="timer_div1" style="font-weight:bold;color:red"></div>
						<div class="images" id="image6">
						1<img  alt="tiger"  src="images/tiger.jpg"/>
						</div>
						<div class="images" id="image7">
						2<img  alt="lion"  src="images/lion.jpg"/>
						</div>
						<div class="images" id="image8">
						3<img  alt="mango"  src="images/hippo.jpg"/>
						</div>
						<div class="images" id="image9">
						4<img  alt="tv"  src="images/tv.jpg"/>
						</div>
						<div class="images" id="image10">
						5<img  alt="mango"  src="images/zebra.jpg"/>
						</div>			<!-- Question 2 End -->
						<div  id="answer2" style="display:none"> <!-- Answer 2 Start -->
						<h5>  Click On That Item Appear Recently </h5>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a11" onclick="b(this.id);" />
						  <img  alt="hippo"  src="images/hippo.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a12" onclick="b(this.id);" />
						  <img  alt="zebra"  src="images/zebra.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a13" onclick="b(this.id);" />
						  <img  alt="tiger"  src="images/tiger.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a14" onclick="b(this.id);" />
						  <img  alt="elephant"  src="images/elephant.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a15" onclick="b(this.id);" />
						  <img  alt="lion"  src="images/lion.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a16" onclick="b(this.id);" />
						  <img  alt="apple"  src="images/mango.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a17" onclick="b(this.id);" />
						  <img  alt="apple"  src="images/banana.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a18" onclick="b(this.id);"  />
						  <img  alt="guava"  src="images/guava.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a19" onclick="b(this.id);" />
						  <img  alt="grapes"  src="images/grapes.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple" id="a20" onclick="b(this.id);"  />
						  <img  alt="banana"  src="images/apple.jpg"/>
						</label>
						<p id="vmq2" style="display:none" ></p>
						<input  name="vm32" id="vm32" type="hidden"/>
						<br>
						<h1 onclick="next1();" class="btn btn-primary">Next Question</h1>
						<br>
						<br>
						</div>
						</div> <!-- Answer 2 End -->
					
					 <div id="3rdq" style="display:none"> <!-- Question 3 Start -->
						<div id="timer_div2" style="font-weight:bold;color:red"></div>
						<div class="images" id="image11">
						<img  alt="car"  src="images/helicopter.jpg"/>
						</div>
						<div class="images" id="image12">
						<img  alt="bus"  src="images/car.jpg"/>
						</div>
						<div class="images" id="image13">
						<img  alt="helicopter"  src="images/bus.jpg"/>
						</div>
						<div class="images" id="image14">
						<img  alt="cycle"  src="images/cycle.jpg"/>
						</div>
						<div class="images" id="image15">
						<img  alt="mango"  src="images/zebra.jpg"/>
						</div>
						<div  id="answer3" style="display:none">
						<h5>  Click On That Item Appear Recently </h5>
						<label class="images">
						  <input type="checkbox" name="car" value="apple" id="a21" onclick="c(this.id);" />
						  <img  alt="car"  src="images/car.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="truck" value="apple" id="a22" onclick="c(this.id);"  />
						  <img  alt="truck"  src="images/truck.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="cycle" value="apple"  id="a23" onclick="c(this.id);"  />
						  <img  alt="cycle"  src="images/cycle.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="bus" value="apple"  id="a24" onclick="c(this.id);" />
						  <img  alt="bus"  src="images/bus.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="helicopter" value="apple"  id="a25" onclick="c(this.id);"  />
						  <img  alt="helicopter"  src="images/helicopter.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple"  id="a26" onclick="c(this.id);"  />
						  <img  alt="apple"  src="images/mango.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple"   id="a27" onclick="c(this.id);" />
						  <img  alt="apple"  src="images/banana.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple"  id="a28" onclick="c(this.id);"  />
						  <img  alt="guava"  src="images/guava.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple"  id="a29" onclick="c(this.id);"  />
						  <img  alt="grapes"  src="images/grapes.jpg"/>
						</label>
						<label class="images">
						  <input type="checkbox" name="apple" value="apple"  id="a30" onclick="c(this.id);" />
						  <img  alt="banana"  src="images/apple.jpg"/>
						</label>
						<br>
						<p id="vmq3"  ></p>
						<input  name="vm33" id="vm33" type="text"/>
						<input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl3vm" onclick="stopTimer();" class="btn btn-primary">Submit</button><br><br>
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
if(isset($_POST['lvl3vm']))
{
	$cat="Visual_memory";
	$q1=$_POST['vm31'];
	$q2=$_POST['vm32'];
	$q3=$_POST['vm33'];
	$times=$_POST['timer'];
	$query="insert into level3 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	echo $query;
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 3 Succesfully Submitted')</script>";
		echo "<script>window.open('level4.php','_self')</script>";

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