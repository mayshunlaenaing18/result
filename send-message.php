<?php

include ("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$table = new Table(new MySQL());
$table->insertMsg($name, $email, $msg);

if($table){
	header("location: contact.php");
}else{
	alert("Refill again");
}