<?php
    include("vendor/autoload.php");
    use Database\MySQL;
    use Database\Table;

    $table = new Table(new MySQL());
    $rows = $table->getAllMarks();
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
        body{
            background-image: linear-gradient(90deg, #701cc9, #440c66);
        }

        h3{
            margin-top: 100px;
            text-align: center;
        }
        #content{
            text-align: center;
            width: 90%;
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
        /*navbar*/

        .dropbtn:hover{
            background: #000;
        }

        .dropdown-content{
            border-radius: 10px;
            background: #000;
        }

        .dropdown-content a:hover{
            background: gray;
            border-radius: 10px;
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
                <a href="#" class="dropbtn" style="border-radius: 10px;">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn" style="border-radius: 10px;">Results &nbsp;
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="show_all_results.php">Show Results</a>
                    <a href="add_results.php">Add Results</a>
                    <a href="manage_results.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>
    <h3>Students' Results</h3>
    <div id="content">
        <table>
        <tr>
            <th>NAME</th>
            <th>ROLL NO</th>
            <th>PAPER 1</th>
            <th>PAPER 2</th>
            <th>PAPER 3</th>
            <th>PAPER 4</th>
            <th>PAPER 5</th>
            <th>PAPER 6</th>
            <th>TOTAL</th>
            <th>PERCENTAGE</th>
        </tr>
        <?php foreach($rows as $row ): ?>
            <tr>
            <td><?= $row->name?></td>
            <td><?= $row->roll_no ?></td>
            <td><?= $row->paper1 ?></td>
            <td><?= $row->paper2 ?></td>
            <td><?= $row->paper3 ?></td>
            <td><?= $row->paper4 ?></td>
            <td><?= $row->paper5 ?></td>
            <td><?= $row->paper6 ?></td>
            <td><?= $row->total ?></td>
            <td><?= $row->percentage ?>%</td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>

