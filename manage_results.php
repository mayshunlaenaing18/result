
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Result</title>
    <link rel="stylesheet" href="css/form.css">
     <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body{
    color: #fff;
    background-image: linear-gradient(90deg, #701cc9, #440c66);
}
    </style>
   
</head>
<body>
    <div class="main">
        <form action="" method="post">
            <fieldset>
                <h4>Update Result</h4>
                   <select name="class_name">
                    <option selected disabled>Select Year</option>
                    <option value="One">1st Year</option>
                    <option value="Two">2nd Year</option>
                    <option value="Three">3rd Year</option>
                    <option value="Four">4th Year</option>
                    <option value="Five">5th Year</option>
                
                </select>                
                <input type="text" name="rn" placeholder="Roll No">
                <input type="text" name="p1" id="" placeholder="Paper 1 - Marks">
                <input type="text" name="p2" id="" placeholder="Paper 2 - Marks">
                <input type="text" name="p3" id="" placeholder="Paper 3 - Marks">
                <input type="text" name="p4" id="" placeholder="Paper 4 - Marks">
                <input type="text" name="p5" id="" placeholder="Paper 5 - Marks">
                <input type="submit" value="Update">
            </fieldset>
        </form>
    </div>
</body>
</html>