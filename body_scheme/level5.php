<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BS Level5</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
		</script>
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
		<script>function hover(){
			if($("#pistol").prop('checked') == true)
			{alert("do not click again");}
			
		}</script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="styles/styles.css">
		<link
			href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
			rel="stylesheet">
			<script>
$(document).ready(function(){
$('.level').filter('.1').show();
$('.level').not('.1').hide();
});
$(document).ready(function(){$("#level2").click(function(){
$('.level').filter('.2').show();
$('.level').not('.2').hide();
})});
$(document).ready(function(){$("#level1").click(function(){
$('.level').filter('.1').show();
$('.level').not('.1').hide();
})});
$(document).ready(function(){$("#level3").click(function(){
$('.level').filter('.3').show();
$('.level').not('.3').hide();
})});
$(document).ready(function(){$("#level4").click(function(){
$('.level').filter('.4').show();
$('.level').not('.4').hide();
})});
$(document).ready(function(){$("#level5").click(function(){
$('.level').filter('.5').show();
$('.level').not('.5').hide();
})});


</script>
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
			
			.labelno{
				border:2px solid black;
				
			}
			img{height:40%;
			width:40%;}
				.images {
    display: inline-block;
	width:45%;
	height:40%;
	margin: 5px;
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
							<form action="level5" method="post">																			<!-- LEVEL 2 STARTS-->
						 <h3 class="labelno">Level 5</h3>
						<h4>IN THIS LEVEL WE SHOW ONLY THE PARTS OF THE BODY AND ASK WHICH PART IS THIS ALONG WITH THE LEFT AND RIGHT CONCEPT</h4>
						<p>1.	FIND THE RIGHT HAND SET IN THIS IMAGE </p>
						<div class="images">
						<label>
						  <input type="radio" name="bsL51" value="a" />
						  <img src="images/bsl51.png" width="50%" height="30%" />
						</label>
						</div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL51" value="b"/>
						  <img src="images/bsl52.png" width="50%" height="30%" />
						</label>
						</div>
						
						
						<p>2.	FIND THE LEFT FOOT  </p>
						<div class="images">
						<label>
						  <input type="radio" name="bsL52" value="a" />
						  <img src="images/bsl53.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL52" value="b" />
						  <img src="images/bsl54.png" width="50%" height="30%"/>
						</label>
						</div>
						
						<p>3.	FIND THE LEFT EAR </p>
						<div class="images">
						<label>
						  <input type="radio" name="bsL53" value="a" />
						  <img src="images/bsl55.png" />
						</label>
						</div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL53" value="b" />
						  <img src="images/bsl56.png" width="50%" height="30%"/>
						</label>
						</div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL53" value="c" />
						  <img src="images/bsl57.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL53" value="D" />
						  <img src="images/bsl58.png" width="50%" height="30%"/>
						</label>
						</div>
						<input type="hidden" name="timer" id="times"/>
						<br><br><button type="submit" name="lvl5bs" onclick="stopTimer();" class="btn btn-primary">Submit</button><br><br>
						</form>
						<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl5bs']))
{
	$cat="Body_scheme";
	$q1=$_POST['bsL51'];
	$q2=$_POST['bsL52'];
	$q3=$_POST['bsL53'];
	$times=$_POST['timer'];
	$query="insert into level5 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 5 Succesfully Submitted')</script>";
		echo "<script>window.open('level5.php','_self')</script>";

		}
}
?>

					</div>						<!-- LEVEL 5 ENDS-->
					<br>
						 
					  
		  <hr>
					  
					
			<div class="col-sm-3" id="rightbar2">
			
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