<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
		</script>
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
<?php $times='<script>document.write(newHour)</script>' ?>
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
			<div class="col-sm-3" >
					<?php
include("../sbcategory.php");
?>
			</div>
			<div class="col-sm-6">
			<br><br>
<div class="3 level">						<!-- LEVEL 3 STARTS-->
					<form action="level3.php" method="post">
						<h3 class="labelno">Level 3</h3>
						<br>
						<p>1.	TAP THE YELLOW CIRCLE </p>
						<label>
						  <input type="radio" name="fcL31" value="a" />
						  <img src="images/fc/fcL31.png" width="50%" height="30%"/>
						</label><label>
						  <input type="radio" name="fcL31" value="b" />
						  <img src="images/fc/fcL32.png" width="50%" height="30%"/>
						</label><label>
						  <input type="radio" name="fcL31" value="c" />
						  <img src="images/fc/fcL33.png" width="50%" height="30%"/>
						</label><label>
						  <input type="radio" name="fcL31" value="d" />
						  <img src="images/fc/fcL34.png" width="50%" height="30%"/>
						</label>


						<p>2.	TAP THE BLUE SQUARE  </p>
						<label>
						  <input type="radio" name="fcL32" value="a" />
						  <img src="images/fc/fcL35.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL32" value="b" />
						  <img src="images/fc/fcL36.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL32" value="c" />
						  <img src="images/fc/fcL37.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL32" value="d" />
						  <img src="images/fc/fcL38.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL32" value="e" />
						  <img src="images/fc/fcL39.png" width="50%" height="30%"/>
						</label>

						<p>3.	TAP THE GREEN TRIANGLE  </p>
						<label>
						  <input type="radio" name="fcL33" value="a" />
						  <img src="images/fc/fcL310.png" width="50%" height="30%"/>
						</label>
						<label>
						  <input type="radio" name="fcL33" value="b" />
						  <img src="images/fc/fcL311.png" width="50%" height="30%"/>
						</label>
						<br>
						 <br><br><button type="submit" name="lvl3fc" onclick="stopTimer();" class="btn btn-primary">Next</button><br><br>
						 </form>
					</div>																						<!-- LEVEL 3 ENDS-->
						<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl3fc']))
{
	$cat="form_constancy";
	$q1=$_POST['fcL31'];
	$q2=$_POST['fcL32'];
	$q3=$_POST['fcL33'];
	$query="insert into level3 (category,q1,q2,q3,q4,q5)value('$cat','$q1','$q2','$q3','null','null')";

	$run2=mysqli_query($con,$query);
	if($run2){
		echo "<script>alert('Level 3 Succesfully Submitted')</script>";
		echo "<script>window.open('level4.php','_self')</script>";

		}
}
?>
						
						
					</div>
								<div class="col-sm-3" id="rightbar2">
			<br><br>
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