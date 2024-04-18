<?php
    include "conn.php";
    session_start();
    $e = $_SESSION['email'];

    $getname = mysqli_query($conn,"SELECT * FROM users WHERE email='$e'");
    while($row=mysqli_fetch_object($getname)){
        $name= $row-> name;
        
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
    <a href="userhome.php">HOME</a> |
    <a href="">GALLERY</a> |
    <a href="">GROUP PROJECT</a> |
    <a href="createpost.php">CREATE POST</a> |
    <a href="update_profile.php ">UPDATE PROFILE</a> |
    <a href="index.php">LOGOUT</a>

    

<h1> User's Post</h1>
<hr> </hr>

<?php
    $getpost = mysqli_query($conn, "SELECT * FROM post WHERE posted_by='$name'");
    while($row1=mysqli_fetch_array($getpost)){

        ?>

         <h2>Title: <?php echo $row1['title'];?></h2>
        <h3>Date: <?php echo $row1['mydate'];?></h3>
        <h3>Description: <?php echo $row1['description'];?></h3>
        <hr> </hr>

        <?php
    }
    ?>

    
</body>
</html>