<?php
    include "conn.php";
    session_start();
    $e = $_SESSION['email'];

    $getname = mysqli_query($conn,"SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){

        $id = $row-> id;
        $name= $row-> name;
        $email= $row-> email;
        $pass= $row-> password;
        $pn= $row-> phone_number;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name?></title>
   
      
</head>
<body>
    <a href="userhome.php">HOME</a>
    <a href="">GALLERY</a>
    <a href="">GROUP PROJECT</a>
    <a href="">CREATE POST</a>
    <a href="update_profile.php ">UPDATE PROFILE</a>
    <a href="index.php">LOGOUT</a>
    
    <center>
    <h1>Update Profile</h1>

    <form action="process.php?id=<?php echo $id?>" method="POST">

        <Label>Name:</Label> <br>
        <input type="text" name="up_nm" value=<?php echo $name?> required> </p>
        
        <Label>Email:</Label> <br>
        <input type="email" name="up_email" value=<?php echo $email?> required> </p>
       
        <Label>Password:</Label> <br>
        <input type="password" name="up_pass" value=<?php echo $pass?> required> </p>
       
        <Label>Phone number:</Label> <br>
        <input type="text" name="up_pn" value=<?php echo $pn?> required> </p>
        
        <input name="update_account" value="Update" required><br>
        
    </form>
    </center>
</body>
</html>