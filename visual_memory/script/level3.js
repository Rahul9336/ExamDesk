window.setTimeout("document.getElementById('image1').style.display='none';",10000);
window.setTimeout("document.getElementById('image2').style.display='none';",10000);
window.setTimeout("document.getElementById('image3').style.display='none';",10000);
window.setTimeout("document.getElementById('image4').style.display='none';",10000);
window.setTimeout("document.getElementById('image5').style.display='none';",10000);
$(function(){
		$("#div1").show();
	});
	$(function() {
  $("#answer").delay(10001).fadeIn();
});
function next(){
	$(function(){
		$("#div1").hide();
	});
	$(function(){
		$("#2ndq").show();
	});
	var seconds_left = 10;
var interval = setInterval(function() {
    document.getElementById('timer_div1').innerHTML = --seconds_left+'Seconds';

    if (seconds_left <= 0)
    {
        document.getElementById('timer_div1').innerHTML = 'TimeOut';
        clearInterval(interval);
    }
}, 1000);
window.setTimeout("document.getElementById('image6').style.display='none';",10000);
window.setTimeout("document.getElementById('image7').style.display='none';",10000);
window.setTimeout("document.getElementById('image8').style.display='none';",10000);
window.setTimeout("document.getElementById('image9').style.display='none';",10000);
window.setTimeout("document.getElementById('image10').style.display='none';",10000);
$(function() {
  $("#answer2").delay(10001).fadeIn();
});
}
function next1(){
	$(function(){
		$("#div1").hide();
	});
	$(function(){
		$("#2ndq").hide();
	});
	$(function(){
		$("#3rdq").show();
	});
	var seconds_left = 10;
var interval = setInterval(function() {
    document.getElementById('timer_div2').innerHTML = --seconds_left+'Seconds';

    if (seconds_left <= 0)
    {
        document.getElementById('timer_div2').innerHTML = 'TimeOut';
        clearInterval(interval);
    }
}, 1000);
window.setTimeout("document.getElementById('image11').style.display='none';",10000);
window.setTimeout("document.getElementById('image12').style.display='none';",10000);
window.setTimeout("document.getElementById('image13').style.display='none';",10000);
window.setTimeout("document.getElementById('image14').style.display='none';",10000);
window.setTimeout("document.getElementById('image15').style.display='none';",10000);
$(function() {
  $("#answer3").delay(10001).fadeIn();
});
}
<!-- question 1 -->
var counter=0;
function a(id){
	if(counter<5){
	var x = document.getElementById(id).checked; 
if(x==true){
    counter++;
	var newText = document.createTextNode
(document.getElementById(id).value);
var para = document.getElementById("vmq1");
para.appendChild(newText);
document.getElementById("vm31").value=document.getElementById("vmq1").innerHTML;
}
document.getElementById(id).disabled=true;
}
}
<!-- question 2-->
var start=0;
function b(id){
	if(start<5){
	var x = document.getElementById(id).checked; 
if(x==true){
    start++;
	var newText = document.createTextNode
(document.getElementById(id).value);
var para = document.getElementById("vmq2");
para.appendChild(newText);
document.getElementById("vm32").value=document.getElementById("vmq2").innerHTML;
}
document.getElementById(id).disabled=true;
}
}
<!-- question 3-->
var go=0;
function c(id){
	if(go<5){
	var x = document.getElementById(id).checked; 
if(x==true){
    go++;
	var newText = document.createTextNode
(document.getElementById(id).value);
var para = document.getElementById("vmq3");
para.appendChild(newText);
document.getElementById("vm33").value=document.getElementById("vmq3").innerHTML;
}
document.getElementById(id).disabled=true;
}
}