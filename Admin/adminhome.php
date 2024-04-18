<?php 
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");

    while($row=mysqli_fetch_object($getadminname)){
        $admin_name = $row -> admin_name;
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $admin_name;?></title>
   
</head>
<body>
    <h1>Welcome Admin <?php echo $admin_name;?></h1>
    <hr></hr>

    <a href="adminhome.php">HOME</a> |
    <a href="user_post.php">USER'S POST</a> |
    <a href="index.php">LOGOUT</a>

    
</body>
</html>