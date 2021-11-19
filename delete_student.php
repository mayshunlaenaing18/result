<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$id = $_GET['id'];
$table = new Table(new MySQL());
$result = $table->deleteStudent($id);

if($result){
	header("location:manage_students.php?del=1");
}
