<?php
include("vendor/autoload.php");
use Helpers\Auth;
use Database\MySQL;
use Database\Table;

$auth = Auth::check();

$table = new Table(new MySQL());
$row = $table->studentMarks($auth->roll_no);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Result Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<style>

		#info{
			margin: 30px 40px;
			color: #fff;
			letter-spacing: 2.5px;
			font-size: 1.2em;
		}

		#results{
			margin-left: 400px;
			color: #fff;
			text-align: center;
		}

		table{
			line-height: 40px;
			letter-spacing: 2px;
			width: 500px;
			font-size: 1.1em;
		}

		#marks{
			clear: both;
			color: #fff;
			margin: 20px 40px;
		}

		#logout{
			text-decoration: none;
			color: #fff;
			float: right;
			margin-top: 0;
		}

		#logout:hover{
			color: #ca10e3;
		}
	</style>
</head>
<body>

	<div id="info">
		<a href="student-logout.php" id="logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
		<b>Name: <?= $auth->name ?></b><br>
		<b>Class: <?= $auth->year ?></b><br>
		<b>Roll No:  <?= $auth->roll_no ?></b>
	</div>
	<div id="results">
		<table>
		<tr>
			<th>Subjects</th>
			<th>Marks</th>
		</tr>
		<tr>
			<td>Paper 1</td>
			<td><?= $row->paper1 ?></td>
		</tr>
		<tr>
			<td>Paper 2</td>
			<td><?= $row->paper2 ?></td>
		</tr>
		<tr>
			<td>Paper 3</td>
			<td><?= $row->paper3 ?></td>
		</tr>
		<tr>
			<td>Paper 4</td>
			<td><?= $row->paper4 ?></td>
		</tr>
		<tr>
			<td>Paper 5</td>
			<td><?= $row->paper5 ?></td>
		</tr>
		<tr>
			<td>Paper 6</td>
			<td><?= $row->paper6 ?></td>
		</tr>
	</table>
	</div>
	<br><br>
	<div id="marks">
		<p style="text-align: left; font-size: 1.1em;position: relative;">Total Marks: <?= $row->total ?><button id="btn1" onClick="btnhide();window.print(); " class="btn btn-sm btn-dark" style="display:inline;position: absolute;right:450px">Print Result</button></p>
		<p style="text-align: left; font-size: 1.1em;">Percentage: <?= $row->percentage ?>%</p>
	</div>
	<script>
		function btnhide(){
			document.getElementById("btn1").style.display = "none";
		}
	</script>
</body>
</html>