<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Auto Sliding</title>
	<style>
		img{
			margin: 20px auto;
			display: block;
		}

		#box1{
			background: red;
			height: 200px;
		}

		#box2{
			height: 200px;
			background: blue;
			display: none;
		}

		#box3{
			height: 200px;
			background: brown;
			display: none;
		}

	</style>
</head>
<body>
	<div id="box1" onclick="next()"></div>
	<div id="box2"></div>	
	<div id="box3" onclick="pre()"></div>
	<script>
		function next(){
			var i = 1;
				var box = document.getElementById("box"+i);
				box.style.display = "none";
				i+=1;
				document.getElementById("box"+i).style.display = "block";
		}

		function pre(){
			var i = 2;
			while(i > 1){
				var box = document.getElementById("box"+i);
				box.style.display = "none";
				i-=1;
				document.getElementById("box"+i).style.display = "block";
			}	
		}
	</script>
</body>
</html>