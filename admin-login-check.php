<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $db = mysqli_select_db($conn,'result');   
    session_start();

    if (isset($_POST["name"],$_POST["password"]))
    {
        $username=$_POST["name"];
        $password=$_POST["password"];
        $sql = "SELECT * FROM admin WHERE name='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);
        if($result) {
            $_SESSION['login_user']=$username;
            header("Location: Dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>

