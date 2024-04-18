<?php
    include "conn.php";
    session_start();

//for registration
    if(isset($_POST['reg_button'])){

        $name=$_POST['nm'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $pn=$_POST['pn'];

        $insertusers=mysqli_query($conn,"INSERT INTO users VALUES('0','$name','$email','$pass','$pn')");
        if($insertusers==true){
            echo "Your registration was successful!";
        }else{
            echo "Error registration\nTry again";
        }

    }
//for login
    if(isset($_POST['login'])){

        $email=$_POST['login_email'];
        $pass=$_POST['login_pass'];
      

        $check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$pass'");
        $num=mysqli_num_rows($check);
        if($num>=1){
            $_SESSION['email']=$email;
            ?>
            <script>
                alert("Login Successfully");
                window.location.href="userhome.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("No existing account");
                window.location.href="index.php";
            </script>
            <?php
            }
    
    }

   //for update
   if(isset($_POST['update_account'])){

    $id =$_GET['id'];

    $upname=$_POST['up_nm'];
    $upemail=$_POST['up_email'];
    $uppass=$_POST['up_pass'];
    $uppn=$_POST['up_pn'];

    $updateusers=mysqli_query($conn,"UPDATE users SET name='$upname', email='$upemail', password='$uppass', phone_number='$uppn' WHERE id='$id'");

    if($updateusers==true){
        ?>
        <script>
            alert("Account updated Successfully!!");
            window.location.href="userhome.php";
        </script>
        <?php
    }else{
         ?>
            <script>
                alert("data not changed!");
                window.location.href="update_profile.php";
            </script>
            <?php
    }
   }

   //post
   if(isset($_POST['create_post'])){

    $title = $_POST['title'];
    $date = $_POST['mydate'];
    $desc = $_POST['desc'];
    $posted_by = $_POST['posted_by'];

    $insertpost = mysqli_query($conn, "INSERT INTO post VALUES('0', '$title', '$date', '$desc', '$posted_by')");

    if($insertpost==true){
        ?>
            <script>
                alert("Post inserted in database successfully!");
                window.location.href="userhome.php";
            </script>
            <?php
            
    }else{
        ?>
       
            <script>
                alert("Post insert unsuccesfull!");
                window.location.href="createpost.php";
            </script>
            <?php

    }
}
