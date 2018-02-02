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
			.images {
    display: inline-block;
    width: 30%;
    height: 75px;
    margin: 10px;  
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
<div class="2 level">						<!-- LEVEL 2 STARTS-->
					<form action="level2.php" method="post">
						 <h3 class="labelno">Level 2</h3>
						<p>  TAP THE CORRECT STATEMENT </p><br>
						<p>1.	TAP THE SQUARE </p>
						<div class="images">
						<label>
						  <input type="radio" name="fcL21" value="a" />
						  <img src="images/fc/fcL21.png" />
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL21" value="b" />
						  <img src="images/fc/fcL22.png"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL21" value="c" />
						  <img src="images/fc/fcL23.png" />
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL21" value="d" />
						  <img src="images/fc/fcL24.png" />
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL21" value="e" />
						  <img src="images/fc/fcL25.png"/>
						</label></div>

						<p>2.	TAP THE CIRCLE</p>
						<div class="images">
						<label>
						  <input type="radio" name="fcL22" value="a" />
						  <img src="images/fc/fcL26.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL22" value="b" />
						  <img src="images/fc/fcL27.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL22" value="c" />
						  <img src="images/fc/fcL28.png" width="50%" height="30%"/>
						</label></div>
						<div>
						<label>
						  <input type="radio" name="fcL22" value="d" />
						  <img src="images/fc/fcL29.png" width="50%" height="30%"/>
						</label></div>

						<p>3.	IDENTIFY THE TRIANGLE  </p>
						<div class="images">
						<label>
						  <input type="radio" name="fcL23" value="a" />
						  <img src="images/fc/fcL210.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL23" value="b" />
						  <img src="images/fc/fcL211.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL23" value="c" />
						  <img src="images/fc/fcL212.png" width="50%" height="30%"/>
						</label></div>
						<div class="images">
						<label>
						  <input type="radio" name="fcL23" value="d" />
						  <img src="images/fc/fcL213.png" width="50%" height="30%"/>
						</label></div>
						<input name="timer" type="hidden" id="times"/><br><br>
						<button type="submit" name="lvl2fc" class="btn btn-primary">Next</button><br><br>
						</form>
						
						<?php
// After uploading to online server, change this connection accordingly
 $con=mysqli_connect("localhost","root","","examdesk");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
if(isset($_POST['lvl2fc']))
{
	$cat="form_constancy";
	$q1=$_POST['fcL21'];
	$q2=$_POST['fcL22'];
	$q3=$_POST['fcL23'];
	$times=$_POST['timer'];
	$query="insert into level2 (category,q1,q2,q3,q4)value('$cat','$q1','$q2','$q3','null')";

	$run2=mysqli_query($con,$query);
	if($run2){
		echo "<script>alert('Level 2 Succesfully Submitted')</script>";
		echo "<script>window.open('level3.php','_self')</script>";

		}
}
?>
						
						
					</div></div>
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