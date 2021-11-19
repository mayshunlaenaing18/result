<?php

include("vendor/autoload.php");
use Database\MySQL;
use Database\Table;

$id = $_GET['id'];
$table = new Table(new MySQL());
$result = $table->editStudent($id);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Students</title>
	<link rel="stylesheet" href="css/form.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
</head>
<body>
<h1>Edit Student</h1>
<div class="main">
<form action="update_student.php" method="post">
    <fieldset>
    <h4>Edit Student</h4>
    <input type="hidden" name="id" value="<?= $result->id ?>">
    <input type="text" name="name" value="<?= $result->name ?>"><br><br>
    <input type="text" name="roll" value="<?= $result->roll_no ?>"><br><br>
    <select name="year"><option selected disabled>Select Class</option>
    	<option value="1st yr" selected = "<?php if($result->year == '1st yr') echo 'selected'?>">1st yr</option>
    	<option value="2nd yr" selected = "<?php if($result->year == '1st yr') echo 'selected'?>">2nd yr</option>
    	<option value="3rd yr" selected = "<?php if($result->year == '1st yr') echo 'selected'?>">3rd yr</option>
    	<option value="4th yr" selected = "<?php if($result->year == '1st yr') echo 'selected'?>">4th yr</option>
        <option value="5th yr" selected = "<?php if($result->year == '1st yr') echo 'selected'?>">5th yr</option>
    </select><br><br>                
    <input type="submit" value="Update">
    </fieldset>
</form>
</div>

</body>
</html>