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
