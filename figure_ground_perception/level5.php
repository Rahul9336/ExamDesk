<!DOCTYPE html>
<html lang="en">
	<head>
		<title>FGP Level 4</title>
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
			  visibility: hidde /* Makes input not-clickable */
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
<br><br>					<div class="3 21 level">																						<!-- LEVEL 3 STARTS-->
						<h3 class="labelno">Level 5</h3>
						<form action="level5.php" method="POST">
							<p>1.	[WINDOW, CAP, BASEBALL BAT, LADDER, PISTOL] <BR> SEE IN PICTURE AND SELECT CORRECT SEQUENCE</p>
					<img src="images/fgp/fgpl51.png" alt="" usemap="#Map" />
					<map name="Map" id="Map">
						<label><area shape="poly" coords="109,35,224,35,227,135,107,142" />
						<input type="checkbox" name="fgpl51[]" value="cap" onchange =""/>  CAP
						</label>
						
						<label><area shape="poly" coords="59,429,159,434,165,600,49,614" />
						<input type="checkbox" name="fgpl51[]" value="Baseball bat" /> Baseball bat
						</label>
						
						<label><area shape="poly" coords="721,525,834,512,831,610,726,610" onmouseover=""/>
						<input id="pistol" type="checkbox" name="fgpl51[]" value="pistol" /> pistol
						</label>
						
						
						<label><area shape="poly" coords="937,115,1002,111,1004,174,940,167" />
						<input type="checkbox" name="fgpl51[]" value="Window" /> Window
						</label>
						
						<label><area shape="poly" coords="925,174,1006,177,1017,340,954,346" />
						<input type="checkbox" name="fgpl51[]" value="ladder" /> ladder
						</label>
						
					</map>
					
					<p>1.	[WINDOW, CAP, BASEBALL BAT, LADDER, PISTOL] <BR> SEE IN PICTURE AND SELECT CORRECT SEQUENCE</p>
					<img src="images/fgp/fgpl52.png" alt="" usemap="#Map2" />
					<map name="Map2" id="Map2">
						<label><area shape="poly" coords="256,436,338,434,331,482,258,487" />
						<input type="checkbox" name="fgpl52[]" value="Banana" onchange =""/>  Banana
						</label>
						
						<label><area shape="poly" coords="318,489,436,466,429,556,316,560" />
						<input type="checkbox" name="fgpl52[]" value="Pistol" /> Pistol
						</label>
						
						<label><area shape="poly" coords="745,45,858,39,856,142,771,149" />
						<input type="checkbox" name="fgpl52[]" value="Television" /> Television
						</label>
						
						<label><area shape="poly" coords="863,81,920,84,925,144,865,150" />
						<input type="checkbox" name="fgpl52[]" value="Convex mirror" /> Convex mirror
						</label>
						
						
						
					</map>
					
					<p>1.	[WINDOW, CAP, BASEBALL BAT, LADDER, PISTOL] <BR> SEE IN PICTURE AND SELECT CORRECT SEQUENCE</p>
					<img src="images/fgp/fgpl53.png" alt="" usemap="#Map3" />
					<map name="Map3" id="Map3">
						<label><area shape="poly" coords="154,71,289,85,286,167,166,167" />
						<input type="checkbox" name="fgpl53[]" value="Hanger" onchange =""/>  Hanger
						</label>
						
						<label><area shape="poly" coords="831,376,935,374,936,489,849,492" />
						<input type="checkbox" name="fgpl53[]" value="Shoes" /> Shoes
						</label>
						
						<label><area shape="poly" coords="481,374,800,355,820,567,494,575" />
						<input type="checkbox" name="fgpl53[]" value="Television" /> Television
						</label>
						
						<label><area shape="poly" coords="44,347,177,349,179,439,25,440" />
						<input type="checkbox" name="fgpl53[]" value="Laptop" /> Laptop
						</label>
						
						<label><area shape="poly" coords="362,112,434,110,431,207,345,214" />
						<input type="checkbox" name="fgpl53[]" value="Girl poster" /> Girl poster
						</label>
						
						
						
					</map>

						   <br><br>
						 

					</div>																						<!-- LEVEL 3 ends-->
						 <input type="hidden" name="timer" id="times"/>
						 <button type="submit" name="lvl5fgpl" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						</form>	
<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl5fgpl']))
{
		$cat="figure_ground_perception";
$q1 = implode(',', $_POST['fgpl51']);
$q2 = implode(',', $_POST['fgpl52']);
$q3 = implode(',', $_POST['fgpl53']);

	$times=$_POST['timer'];
	$query="insert into level5 (category,q1,q2,q3,q4,q5,timetaken)value('$cat','$q1','$q2','$q3','null','null','$times')";
	echo $query;
	$run=mysqli_query($con,$query);
	if($run){
		echo "<script>alert('Level 5 Succesfully Submitted')</script>";
		echo "<script>window.open('../color_agnosia/level1.php','_self')</script>";

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