<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Result Management System</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1 class="h2 text-center mt-0.5 pt-3 mb-5">Student Result Management System</h1>
	<!-- navbar -->
	<ul class="mb-5">
		<li><a href="#">Home</a></li>
		<li><a href="admin-login.php">Admin Login</a></li>
		<li><a href="#">Student Login</a></li>
		<li><a href="#">Contact Us</a></li>
	</ul>

	<img src="images/act1.jpg" width="800" height="600" style="display: block;margin:150px auto 50px auto" class="rounded">


	<!-- <div class="slideshow-container">
		<div class="mySlides fade">
  			<img src="images/act1.jpg" style="height: 500px;margin: 30px 170px;" class="rounded">
		</div>

		<div class="mySlides fade">
	  		<img src="images/act2.jpg" style="height: 500px;margin: 30px 170px;" class="rounded">
		</div>

		<div class="mySlides fade">
  			<img src="images/act1.jpg" style="height: 500px;margin: 30px 170px;" class="rounded">
		</div>
	</div>


	<div style="text-align:center">
  		<span class="dot"></span> 
  		<span class="dot"></span> 
  		<span class="dot"></span> 
	</div> -->


	<div id="sub">
		<div id="sub1" class="grid">
			<p>Paper 1...<a href="#">Read more</a></p>
		</div>
		<div id="sub2" class="grid">
			<p>Paper 2...<a href="#">Read more</a></p>
		</div>
		<div id="sub3" class="grid">
			<p>Paper 3...<a href="#">Read more</a></p>
		</div>
		<div id="sub4" class="grid">
			<p>Paper 4...<a href="#">Read more</a></p>
		</div>
		<div id="sub5" class="grid">
			<p>Paper 5...<a href="#">Read more</a></p>
		</div>
		<div id="sub6" class="grid">
			<p>Paper 6...<a href="#">Read more</a></p>
		</div>
	</div>
	<!-- <script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {

		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  
		  slideIndex++;
		  
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  	for (i = 0; i < dots.length; i++) {
		    	dots[i].className = dots[i].className.replace(" active", "");
		  	}
		  
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
</script> -->

	</body>
</html>