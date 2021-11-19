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
	<h1>Add Student</h1>
	<div class="main">
        <form action="insert-students.php" method="post">
            <fieldset>
                <h4>Add Student</h4>
                <input type="name" name="name" placeholder="Name"><br><br>
                <input type="text" name="roll_no" placeholder="Roll No"><br><br>
                <select name="year"><option selected disabled>Select Year</option>
                	<option value="1st yr">1st Year</option>
                	<option value="2nd yr">2nd Year</option>
                	<option value="3rd yr">3rd Year</option>
                	<option value="4th yr">4th Year</option>
                	<option value="5th yr">Final</option>
                </select><br><br>                
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

</body>
</html>
