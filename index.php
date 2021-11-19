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
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Admin Login</a></li>
		<li><a href="student-login.php">Student Login</a></li>
		<li><a href="contact.php">Contact Us
	</ul>

	<img src="images/act1.jpg" width="800" height="600" style="display: block;margin:150px auto 50px auto;border: 3px solid #000;border-radius: 20px;box-shadow: 5px 5px 5px #222;" class="rounded">

	<div id="sub">
		<div id="sub1" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p1">Paper 1 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots1">...<a href="#" onclick="rmore1()">Read more</a></span> <span id="more1" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless1()">Read less</a></span></p>
		</div>
		<div id="sub2" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p2">Paper 2 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots2">...<a href="#" onclick="rmore2()">Read more</a></span> <span id="more2" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless2()">Read less</a></span></p>
		</div>
		<div id="sub3" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p3">Paper 3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots3">...<a href="#" onclick="rmore3()">Read more</a></span> <span id="more3" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless3()">Read less</a></span></p>
		</div>
		<div id="sub4" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p4">Paper 4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots4">...<a href="#" onclick="rmore4()">Read more</a></span> <span id="more4" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless4()">Read less</a></span></p>
		</div>
		<div id="sub5" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p5">Paper 5 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots5">...<a href="#" onclick="rmore5()">Read more</a></span> <span id="more5" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless5()">Read less</a></span></p>
		</div>
		<div id="sub6" class="layout" style="color: #000;background: #ca10e3;width: 23%;border: 1px solid black;margin-left: 90px;border-radius: 10px;float: left;margin-bottom: 20px;height: 145px;font-size: 16px;padding: 10px;">
			<p id="p6">Paper 6 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut laboreet dolore magna aliqua. Ut enim ad minim veniam <span id="dots6">...<a href="#" onclick="rmore6()">Read more</a></span> <span id="more6" style="display: none">. Ut enim ad minim veniam incididunt ut. <a href="#" onclick="rless6()">Read less</a></span></p>
		</div>
	<script>
		function paper1(){
			var para = document.getElementById("p1");
			para.innerText = "I am para1";
		}

		function rmore1(){
			document.getElementById("dots1").style.display = "none";
			document.getElementById("more1").style.display = "inline";
		}

		function rless1(){
			document.getElementById("more1").style.display = "none";
			document.getElementById("dots1").style.display = "inline";
		}

		function rmore2(){
			document.getElementById("dots2").style.display = "none";
			document.getElementById("more2").style.display = "inline";
		}

		function rless2(){
			document.getElementById("more2").style.display = "none";
			document.getElementById("dots2").style.display = "inline";
		}

		function rmore3(){
			document.getElementById("dots3").style.display = "none";
			document.getElementById("more3").style.display = "inline";
		}

		function rless3(){
			document.getElementById("more3").style.display = "none";
			document.getElementById("dots3").style.display = "inline";
		}

		function rmore4(){
			document.getElementById("dots4").style.display = "none";
			document.getElementById("more4").style.display = "inline";
		}

		function rless4(){
			document.getElementById("more4").style.display = "none";
			document.getElementById("dots4").style.display = "inline";
		}

		function rmore5(){
			document.getElementById("dots5").style.display = "none";
			document.getElementById("more5").style.display = "inline";
		}

		function rless5(){
			document.getElementById("more5").style.display = "none";
			document.getElementById("dots5").style.display = "inline";
		}

		function rmore6(){
			document.getElementById("dots6").style.display = "none";
			document.getElementById("more6").style.display = "inline";
		}

		function rless6(){
			document.getElementById("more6").style.display = "none";
			document.getElementById("dots6").style.display = "inline";
		}
	</script>
	</body>
</html>