<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    
</head>
<body>
    <h1>Welcome to my Login Page!</h1>

    
    <form action="process.php" method="POST">

       
        <Label>Email:</Label> <br>
        <input type="email" name="login_email" placeholder="Enter email here..." required> </p>
       
        <Label>Password:</Label> <br>
        <input type="password" name="login_pass" placeholder="Enter password here..." required> </p>
       
      
        <input type="submit" name="login" value="Log in" required><br>
        
    </form>
   
    </br>
    <button><a href="Admin/index.php">Log in as admin</a></button>
    <button><a href="reg.php">Click to register</a></button>
    
</body>
</html>