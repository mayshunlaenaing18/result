<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		div{
			height: 135px;
			width: 23%;
			text-align: center;
			border: 1px solid black;
		}
		p{
			margin: 3px auto;
		}
		#dots{
			cursor: pointer;
		}
		a{
			text-decoration: none;
		}
		#more{
			display: none;
		}
	</style>
</head>
<body>
	<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim <span id="dots">...<a href="#"  onclick="rmore()"> Read more</a></span><span id="more" onclick="rless()">ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="#">Read less</a></span></p></div>
	<script>
		function rmore(){
			document.getElementById("dots").style.display = "none";
			document.getElementById("more").style.display = "inline";
		}
		function rless(){
			document.getElementById("more").style.display = "none";
			document.getElementById("dots").style.display = "inline";
		}


		function rmore1(){
			document.getElementById("dots1").style.display = "none";
			document.getElementById("more1").style.display = "inline";
		}
	</script>
</body>
</html>