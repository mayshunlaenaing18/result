<?php
include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$year = $_POST['year'];
$roll = $_POST['roll'];

$table = new Table(new MySQL());
$statement = $table->getByRoll($year, $roll);
if($statement){
	session_start();
	$_SESSION['student'] = $statement;
	header("location: show-result.php");
}else{
	header("location: student-login.php?error=1");
}

?>