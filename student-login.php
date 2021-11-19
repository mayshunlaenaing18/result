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
	<h1 class="h2 text-center mt-0.5 pt-3 mb-5" style="text-align: center;">Student</h1>
	<div class="container" style="text-align: center;">
	<?php if(isset($_GET['error'])):?>
		<div class="alert alert-warning text-danger" id="warning">Please try again!</div>
	<?php endif; ?>
	</div>
	<form id="student" class="bg-dark" action="login_check.php" method="post">
		<div class="form-group">
			<label for="student">Student Login</label><br><br>
			<select class="form-select" name="year" required>
				<option value="0" selected>Select Year</option>
				<option value="1st yr">First Year</option>
				<option value="2nd yr">Second Year</option>
				<option value="3rd yr">Third Year</option>
				<option value="4th yr">Fourth Year</option>
				<option value="5th yr">Fifth Year</option>
			</select><br>
			<input type="text" name="roll" class="form-control" placeholder="Roll No" required><br>
			<button class="btn btn-sm btn-outline-light" style="text-align: left;">Login</button>
		</div>
	</form>
</body>
</html>