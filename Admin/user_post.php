<?php 
    include "../conn.php";
    session_start();

    $email = $_SESSION['email'];

    $getadminname = mysqli_query($conn, "SELECT  * FROM admin WHERE email='$email' ");

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
    <h1>Welcome Admin <?php echo $admin_name; ?></h1>
    <hr></hr>


    <a href="adminhome.php">HOME</a> |
    <a href="user_post.php">USER'S POST</a> |
    <a href="index.php">LOGOUT</a>


    <h1>All Post by the Users</h1>
    <?php 
    $getuserspost = mysqli_query  ($conn, "SELECT * FROM post");
    while($row1 = mysqli_fetch_array($getuserspost)){
        ?>>
        <h2>Title: <?php echo $row1['title'];?></h2>
        <h3>Date: <?php echo $row1['mydate'];?></h3>
        <h3>Description: <?php echo $row1['description'];?></h3>
        <h3>Posted By: <?php echo $row1['posted_by'];?></h3>
        <hr></hr>
        <?php
    }
    ?>
</body>
</html>