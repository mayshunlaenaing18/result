<?php
    include("vendor/autoload.php");
    use Database\MySQL;
    use Database\Table;

    $table = new Table(new MySQL());
    $rows = $table->getAllStudents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Dashboard</title>
    <style>
        h3{
            margin-top: 40px;
            text-align: center;
        }
        #content{
            text-align: center;
            width: 70%;
            margin: 10px auto;
        }
        table{
            width: 100%;
            background: black;
            line-height: 50px;
            border-radius: 10px;
        }
        td,th{
            border-bottom: 1px solid white;
        }
        th{
            border-top: 1px solid white;
        }
        button{
            cursor: pointer;
            border-radius: 8px;
        }
        button:hover{
            background: gray;
        }
    </style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
      <h1>Dashboard</h1>
        <a href="logout.php" style="color: white; text-decoration:none;"><span class="fa fa-sign-out"></span> Logout</a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>
    <h3>Manage Students</h3>
    <div id="content">
        <table>
        <tr>
            <th>NAME</th>
            <th>ROLL NO</th>
            <th>CLASS</th>
            <th>ACTIONS</th>
        </tr>
        <?php foreach($rows as $row ): ?>
            <tr>
            <td><?= $row->name?></td>
            <td><?= $row->roll_no ?></td>
            <td><?= $row->year ?></td>
            <td><a href="edit_student.php?id=<?= $row->id?>"><button>Edit</button></a>
                <a href="delete_student.php?id=<?= $row->id?>"><button>Delete</button></a>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>

