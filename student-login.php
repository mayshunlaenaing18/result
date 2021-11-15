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
	<form id="student" class="bg-dark" action="login-check.php">
		<div class="form-group">
			<label for="student">Student Login</label><br><br>
			<select class="form-select" required>
				<option value="0" selected>Select Year</option>
				<option value="1">First Year</option>
				<option value="2">Second Year</option>
			</select><br>
			<input type="text" name="roll" class="form-control" placeholder="Roll No" required><br>
			<button class="btn btn-sm btn-outline-light" style="text-align: left;">Login</button>
		</div>
	</form>
</body>
</html>