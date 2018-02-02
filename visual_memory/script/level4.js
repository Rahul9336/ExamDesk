window.setTimeout("document.getElementById('image1').style.display='none';",10000);
$(function(){
		$("#div1").show();
	});
	$(function() {
  $("#answer").delay(10001).fadeIn(carousel());
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
window.setTimeout("document.getElementById('image2').style.display='none';",10000);
$(function() {
  $("#div2").delay(10001).fadeIn(carousell());
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
window.setTimeout("document.getElementById('image3').style.display='none';",10000);
$(function() {
  $("#answer3").delay(10001).fadeIn(carouselll());
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
var myIndex = 0;
function carousel() {
    var i;
    var x = document.getElementsByClassName("answer1");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

var startindex = 0;
function carousell() {
    var m;
    var y = document.getElementsByClassName("answer2");
    for (m = 0; m < y.length; m++) {
       y[m].style.display = "none";  
    }
    startindex++;
    if (startindex > y.length) {startindex = 1}    
    y[startindex-1].style.display = "block";  
    setTimeout(carousell, 2000); // Change image every 2 seconds
}

var init = 0;
function carouselll() {
    var n;
    var z = document.getElementsByClassName("answer3");
    for (n = 0; n < z.length; n++) {
       z[n].style.display = "none";  
    }
    init++;
    if (init > z.length) {init = 1}    
    z[init-1].style.display = "block";  
    setTimeout(carouselll, 2000); // Change image every 2 seconds
}