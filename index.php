<!DOCTYPE html>
<html>
<head>
	<title>Jquery Tutorial</title>
	<!--include CSS files-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container bg-dark mt-5 rounded p-5">
	<h1 class="display-4 text-center bg-success p-3 rounded">This is Jquery practice template</h1>

<!-- <div class="col-6 mx-auto">
	<input class="form-control" type="text" name="">
	<h2></h2>
</div> -->

<div class="col-6">
	<div class="w-30 py-5">
		<h1 id="sec" class="text-light text-center"></h1>
		<p class="text-center lead text-light">Seconds</p>
	</div>
	
	<button id="counter" class="btn btn-success btn-block"> Start Countdown</button>
	<button id="stop" class="btn btn-danger btn-block"> Stop Countdown</button>
</div>




</div>
<!--include JS Files...-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script>

let sec = 30;

$('button#counter').click( function(){
 get = setInterval( function(){
$('h1#sec').html(sec);
sec--;
if (sec < 0) {
	clearInterval(get);}
}, 1000);
});


// $('input').keyup(function(){
// 	let text = $('input').val();
// 	let number = text.length;

// if (number == 0 ) {
// 	$('h2').html('Type Your Password');
// }else if(number >0 && number < 6){
// 	$('h2').html('Type continue');
// }else if(number>6 && number<10){
// 	$('h2').html('Just Parfect');
// }else if(number >10){
// $('h2').html('<span style="color:red;">you are Exceding your limit, Just STOP !</span>');
// }
// });



</script>

</body>
</html>