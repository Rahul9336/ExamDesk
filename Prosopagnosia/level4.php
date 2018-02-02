<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PP Level4</title>
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
					
						<form action="level4.php" method="post" enctype="multipart/form-data">																				<!-- LEVEL 2 STARTS-->
						 <h3 class="labelno">Level 4</h3>
						<p>  TAP THE CORRECT STATEMENT </p><br>
						<p>1.	CLICK THE NAMES OF THE PEOPLE YOU SEE IN THE IMAGE  <br><img src="images/ppl41.png"/></p>
						<label>
						<input type="checkbox" name="ppL41[]" value="SOURAV GANGULY" /> &nbsp &nbsp <b>1.	SOURAV GANGULY</b></label> <br>
						<label>
						<input type="checkbox" name="ppL41[]" value="SACHIN TENDULKAR" /> &nbsp &nbsp <b>2.	SACHIN TENDULKAR </b></label> <br>
						<label>
						<input type="checkbox" name="ppL41[]" value="VIRAT KOHLI" /> &nbsp &nbsp <b>3.	VIRAT KOHLI</b>
						</label><br>
						<label>
						<input type="checkbox" name="ppL41[]" value="MS DHONI" /> &nbsp &nbsp <b>4.	MS DHONI</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL41[]" value="AZHARUDDIN" /> &nbsp &nbsp <b>5.	AZHARUDDIN</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL41[]" value="KAPIL DEV" /> &nbsp &nbsp <b>6.	KAPIL DEV</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL41[]" value="YUVRAJ SINGH" /> &nbsp &nbsp <b>7.	YUVRAJ SINGH</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL41[]" value="SUNIL GAVASKAR" /> &nbsp &nbsp <b>8.	SUNIL GAVASKAR</b><br><br>
						</label>
						<p>2.	WHO ALL ARE IN THIS PICTURE<br><img src="images/ppl42.png"/></p>
							<label>
						<input type="checkbox" name="ppL42[]" value="RAJESH  KHANNA" /> &nbsp &nbsp <b>1.	RAJESH  KHANNA</b></label> <br>
						<label>
						<input type="checkbox" name="ppL42[]" value="RATAN TATA" /> &nbsp &nbsp <b>2.	RATAN TATA</b></label> <br>
						<label>
						<input type="checkbox" name="ppL42[]" value="MUKESH AMBANI" /> &nbsp &nbsp <b>3.	MUKESH AMBANI</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL42[]" value="SHAHRUKH KHAN" /> &nbsp &nbsp <b>4.	SHAHRUKH KHAN</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL42[]" value="AKSHAY KUMAR" /> &nbsp &nbsp <b>5.	AKSHAY KUMAR</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL42[]" value="AMITABH BACHCHAN" /> &nbsp &nbsp <b>6.	AMITABH BACHCHAN</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL42[]" value="SHATRUGHAN SINHA" /> &nbsp &nbsp <b>7.	SHATRUGHAN SINHA</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL42[]" value="AAMIR KHAN" /> &nbsp &nbsp <b>8.	AAMIR KHAN</b><br><br>
						</label>
						<p>3.	WHO ALL ARE THERE IN THIS PICTURE <br><img src="images/ppl43.png"/></p>
							<label>
						<input type="checkbox" name="ppL43[]" value="RAJESH  KHANNA" /> &nbsp &nbsp <b>1.	RAJESH  KHANNA</b></label> <br>
						<label>
						<input type="checkbox" name="ppL43[]" value="AKSHAY KUMAR" /> &nbsp &nbsp <b>2.	AKSHAY KUMAR</b></label> <br>
						<label>
						<input type="checkbox" name="ppL43[]" value="SUNIL DUTT" /> &nbsp &nbsp <b>3.	SUNIL DUTT</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL43[]" value="MADHUBALA" /> &nbsp &nbsp <b>4.	MADHUBALA</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL43[]" value="AMITABH BACHCHAN" /> &nbsp &nbsp <b>5.	AMITABH BACHCHAN</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL43[]" value="JAYA BACHCHAN" /> &nbsp &nbsp <b>6.	JAYA BACHCHAN</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL43[]" value="DIMPLE KAPADIA" /> &nbsp &nbsp <b>7.	DIMPLE KAPADIA</b><br>
						</label><br>
						<label>
						<input type="checkbox" name="ppL43[]" value="SHAHRUKH KHAN" /> &nbsp &nbsp <b>8.	SHAHRUKH KHAN</b><br><br>
						</label><br>																						<!-- LEVEL 1 ENDS-->																					<!-- LEVEL 2 ENDS-->
					<input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl4pp" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl4pp']))
{
	$cat="Prosopagnosia";
	$q1=$_POST['ppL41'];
	$q2=$_POST['ppL42'];
	$q3=$_POST['ppL43'];
	$times=$_POST['timer'];
	$chkq1="";   
foreach($q1 as $chk1)   
   {   
      $chkq1 .= $chk1.",";   
   }
   	$chkq2="";   
foreach($q2 as $chk2)   
   {   
      $chkq2 .= $chk2.",";   
   }
     	$chkq3="";   
foreach($q3 as $chk3)   
   {   
      $chkq3 .= $chk3.",";   
   }
	$query="insert into level4 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$chkq1','$chkq2','$chkq3','null','null','$times')";
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 4 Succesfully Submitted')</script>";
		echo "<script>window.open('level5.php','_self')</script>";

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