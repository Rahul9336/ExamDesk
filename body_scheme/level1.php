<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BS level1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
		</script>
		<script src="${js}/intial.js"></script>
		<script>
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
							<form method="post" action="level1.php">																			<!-- LEVEL 1 STARTS-->
						 <h3 class="labelno">Level 1</h3>
						<p>IN THIS WE WILL SHOW THE PATIENT THEIR BODY PARTS AND ASK THEM TO IDENTIFY <br>1.	TAP ON THE NOSE </p>
						<div><div class="images">
						<label>
						  <input type="radio" name="bsl11" value="a" />
						  <img src="images/bsl11.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsl11" value="b" />
						  <img src="images/bsl12.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsl11" value="c" />
						  <img src="images/bsl13.png" width="50%" height="30%"/>
						</label></div>
						<br></div>
						
						<p>2.	IDENTIFY HANDS  </p>
						<div class="images">
						<label>
						  <input type="radio" name="bsL12" value="a" />
						  <img src="images/bsl14.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL12" value="b" />
						  <img src="images/bsl15.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL12" value="c" />
						  <img src="images/bsl16.png" width="50%" height="30%"/>
						</label></div>
					
						
						<p>3.	IDENTIFY CHEST </p>
						<div class="images">
						<label>
						  <input type="radio" name="bsL13" value="a" />
						  <img src="images/bsl17.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL13" value="b" />
						  <img src="images/bsl18.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="bsL13" value="c" />
						  <img src="images/bsl19.png" width="50%" height="30%"/>
						</label></div>
					
						
						<input type="hidden" name="timer" id="times"/>
						<br><br><button type="submit" name="lvl1bs" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>
						<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl1bs']))
{
	$cat="Body_scheme";
	$q1=$_POST['bsL11'];
	$q2=$_POST['bsL12'];
	$q3=$_POST['bsL13'];
	$times=$_POST['timer'];
	$query="insert into level1 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Body Scheme Level 1 Succesfully Submitted')</script>";
		echo "<script>window.open('level2.php','_self')</script>";

		}
}
?>
					</div>						<!-- LEVEL 1 ENDS-->
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