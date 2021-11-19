<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style type="text/css">
        body{
            background-image: linear-gradient(90deg, #701cc9, #440c66);
        }
        h1{
            border-top: 1px solid black;
            margin-right: 40px;
            margin-left: 40px;
        }
    </style>
</head>
<body>
   <h1 class="h2 text-center mt-0.5 pt-3 mb-5" style="text-align: center;">Admin</h1>

        <div style="width: 70%;margin: 20px auto;border: 2px solid white;padding: 10px;border-radius: 20px;" class="bg-dark">
        <form action="admin-login-check.php" method="post">
            <label for="login" class="text-light mb-3">Admin Login</label><br>
           <input type="username" name="name" placeholder="Username" class="form-control" required><br>
           <input type="password" class="form-control" name="password"
           placeholder="Password" required><br>
           <input type="submit" name="login" value="Login" class="btn btn-sm btn-dark btn-outline-light">
        </form>
        </div>

</body>
</html>

