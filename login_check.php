<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$roll = $_POST['roll'];
$year = $_POST['year'];

$table = new Table(new MySQL());
$statement = $table->getByRoll($year, $roll);
session_start();
$_SESSION['student'] = $statement;
header("location: show-result.php");
if($statement){
	session_start();
	$_SESSION['student'] = $statement;
	header("location: show-result.php");
}else{
	header("location: student-login.php?error=1");
}

