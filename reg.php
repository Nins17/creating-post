<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
  

</head>
<body>
    <h1>Registration Form</h1>

    <form action="process.php" method="POST">

        <Label>Name:</Label> <br>
        <input type="text" name="nm" placeholder="Enter name here..." required> </p>
        
        <Label>Email:</Label> <br>
        <input type="email" name="email" placeholder="Enter email here..." required> </p>
       
        <Label>Password:</Label> <br>
        <input type="password" name="pass" placeholder="Enter password here..." required> </p>
       
        <Label>Phone number:</Label> <br>
        <input type="text" name="pn" placeholder="Enter Phone number here..." required> </p>
        
        <input  type="submit" name="reg_button" value="Register" required><br>
        
    </form>
    <br>
    <button><a href="index.php">Click to login</a></button>
</body>
</html>