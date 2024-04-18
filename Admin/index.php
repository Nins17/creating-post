<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    
</head>
<body>
    <h1>Login Page for Admin form</h1>
    
    <form action="adminprocess.php" method="POST">
            <label for="">Email</label> <br>
            <input type="email" name="email" required placeholder="Email here..."> </p>

            <label for="">Password</label> <br>
            <input type="password" name="pass" required placeholder="Password here..."> </p>

            <input  type="submit" name="admin_login" value="LOGIN">



        </form>
        <br>
     <button><a href="../index.php">Log in as user</a></button>
</body>
</html>