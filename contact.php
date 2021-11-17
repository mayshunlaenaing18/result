<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<style>
		body{
			background-image: url("images/bg2.jpg");
			margin: 0px 50px 10px 50px;
		}
		#start, #end{
			width: 48%;
			height: 400px;
			float: left;
			margin-bottom: 50px;
			color: #000;
		}
		#lorem{
			margin-bottom: 60px;
		}
		input[type="text"], 
		input[type="email"], 
		textarea{
			border-bottom: 2px solid #fff;
			border-top-style: none;
			border-right-style: none;
			border-left-style: none;
			color: #fff;
		}

		#cform{
			padding: 20px;
			border-radius: 10px;
			border: 2px solid #440c66;
			box-shadow: 3px 5px #440c66;
			opacity: 0.7;
		}

	</style>
</head>
<body>
	<h1 class="h2 text-center mt-0.5 pt-3 mb-4" style="text-align: center;color:#000">Contact Us</h1>
	<p class="text-center" id="lorem" style="color:#000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqu Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat</p>

	<div id="start" class="ms-2">
		<div id="address" style="display:block">	
			<h4 class="h5"><span style="display: inline;"><i class='fas fa-map-marker-alt' style="font-size: 22px;"></i></span>   Address</h4>
			<p style="margin: 0;text-indent: 27px;">4671 Sugar Camp Road,
			Owatonna,<br> &nbsp;&nbsp;&nbsp;&nbsp;  Minnesota,
			55060</p>
		</div><br><br>
		<div id="phone" style="display:block">	
			<h4 class="h5"><span style="display: inline;"><i class='fas fa-phone' style="font-size: 22px;"></i></span>  Phone</h4>
			<p style="margin: 0;text-indent: 27px;">09-98765112</p>
		</div><br><br>
		<div id="email" style="display:block">	
			<h4 class="h5"><span style="display: inline;"><i class='fa fa-envelope' style="font-size: 22px;"></i></span>  Email</h4>
			<p style="margin: 0;text-indent: 27px;">  kyawkyaw@gmail.com</p>
		</div><br><br>
	</div>
	<div id="end">
		<div id="cform" class="bg-dark">
			<h2 style="color:#fff">Send Message</h2>
			<form method="post" action="send-message.php">
					<input type="text" name="name" placeholder="Full Name" class="form-control bg-dark text-white" required><br>
					<input type="email" name="email" placeholder="Email" class="form-control bg-dark text-white" required><br>
					<textarea style="border-bottom: 2px solid #fff;border-top-style: none;border-right-style: none;border-left-style: none;" class="form-control bg-dark text-white" placeholder="Type your Message..." name = "msg" required></textarea><br><br>
					<button class="btn btn-sm btn-light">Send</button>
			</form>
		</div>
	</div>
	<script src="fontawesome.min.js"></script>
</body>
</html>