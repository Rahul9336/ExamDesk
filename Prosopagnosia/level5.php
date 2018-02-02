<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PP Level5</title>
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
		
function c(id){
		document.getElementById(id).checked=true;
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
					<div class="1 level"> 
					<!-- LEVEL 1 STARTS-->
						<h3 class="labelno">Level 5</h3>
				<form action="level5.php" method="POST">
						<p>1.	TAP ON THE FACE OF CHACHA NEHRU</p>
					<img src="images/ppl51.png" alt="" usemap="#Map" />
					<map name="Map" id="Map">
						<label><area shape="poly" coords="63,2,116,5,115,55,68,52" onclick="c('q1');" />
						<input type="radio" name="ppl51" value="true" id="q1"/>  
						</label>
						
						
						
					</map>
					
					<p>2.	FIND MAHATAMA GANDHI IN THE PICTURE</p>
					<img src="images/ppl52.png" alt="" usemap="#Map2" />
					<map name="Map2" id="Map2">
						<label><area shape="poly" coords="230,100,288,105,282,164,227,149" onclick="c('q2');" />
						<input type="radio" name="ppl52" value="true" id="q2"/>  
						</label>
						
						
						
						
						
					</map>
					
					<p>3.	FIND INDRA GANDHI IN THE PICTURE </p>
					<img src="images/ppl53.png" alt="" usemap="#Map3" />
					<map name="Map3" id="Map3">
						<label><area shape="poly" coords="345,4,430,9,435,84,354,89" onclick="c('q3');" />
						<input type="radio" name="ppl53" value="true" id="q3"/>  
						</label>
						
						
						
						
						
					</map>
						 
						  <input type="hidden" name="timer" id="times"/>
						 <br>
						 <br><br><button type="submit" name="lvl5pp" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl5pp']))
{
	$cat="Prosopagnosia";
	$q1=$_POST['ppl51'];
	$q2=$_POST['ppl52'];
	$q3=$_POST['ppl53'];
	$times=$_POST['timer'];
	$query="insert into level5 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Prosopagnosia Level 5 Succesfully Submitted')</script>";
		echo "<script>window.open('../body_scheme/level1.php','_self')</script>";

		}
}
?>

						</div>						<!-- LEVEL 1 ENDS-->
					  </div>
		  <hr>
					  
					
			<div class="col-sm-3" id="rightbar2">
			
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