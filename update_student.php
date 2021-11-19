<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$id = $_POST['id'];
$name = $_POST['name'];
$roll = $_POST['roll'];
$year = $_POST['year'];

$table = new Table(new MySQL());
$result = $table->updateStudent($id, $name, $roll, $year);
header("location: manage_students.php");
?>