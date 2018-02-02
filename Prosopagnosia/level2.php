<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PS Level1</title>
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
<br><br>				<div class="1 level">
					<!-- LEVEL 1 STARTS-->
					<br><br>
						<form action="level2.php" method="post">																				<!-- LEVEL 2 STARTS-->
						 <h3 class="labelno">Level 2</h3>
						<p>  TAP THE CORRECT STATEMENT </p><br>
						<p>1.	WHO IS THIS MARTAIL ARTIST <br><img src="images/ppl21.png"/></p>
						<label>
						<input type="radio" name="ppL21" value="a" /> &nbsp &nbsp <b>1.	JACKIE CHAN</b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>2.	BRUCE LEE </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="c" /> &nbsp &nbsp <b>3. AKSHAY KUMAR</b>
						</label><br>
						<label>
						<input type="radio" name="ppL21" value="d" /> &nbsp &nbsp <b>4.	IP MAN </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>5.	DONNY YEN </b></label> <br>
						 <br>
						<p>2.	WHO’S THIS CRICKETER <br><img src="images/ppl22.png"/></p>
						<label>
						<input type="radio" name="ppL21" value="a" /> &nbsp &nbsp <b>1.	YUVRAJ SINGH </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>2.	VIRAT KOHLI </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="c" /> &nbsp &nbsp <b>3.	MS DHONI</b>
						</label><br>
						<label>
						<input type="radio" name="ppL21" value="d" /> &nbsp &nbsp <b>4.	KAPIL DEV</b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>5.	SOURAV GANGULY </b></label> <br>
						 <br>
						<p>3.	WHO’S THIS ARTIST <br><img src="images/ppl23.png"/></p>
<label>
						<input type="radio" name="ppL21" value="a" /> &nbsp &nbsp <b>1.	MADHURI DIXIT </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>2.	PRIYANKA CHOPRA </b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="c" /> &nbsp &nbsp <b>3.	MADHUBALA</b>
						</label><br>
						<label>
						<input type="radio" name="ppL21" value="d" /> &nbsp &nbsp <b>4.	AISHWARYA RAI</b></label> <br>
						<label>
						<input type="radio" name="ppL21" value="b" /> &nbsp &nbsp <b>5.	ZEENAT AMAN </b></label> <br>
						 <br><!-- LEVEL 1 ENDS-->																					<!-- LEVEL 2 ENDS-->
					<input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl2pp" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl2pp']))
{
	$cat="Prosopagnosia";
	$q1=$_POST['ppL21'];
	$q2=$_POST['ppL22'];
	$q3=$_POST['ppL23'];
	$times=$_POST['timer'];
	$query="insert into level2 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	echo $query;
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 2 Succesfully Submitted')</script>";
		echo "<script>window.open('level3.php','_self')</script>";

		}
}
?>
						</div>	</div>					<!-- LEVEL 1 ENDS-->
					  
						
			
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