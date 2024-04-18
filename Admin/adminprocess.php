<?php 
    include "../conn.php";
    session_start();

    if(isset($_POST['admin_login'])){

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        ?>
        <!---create admin table in database, 4 columns, id email pass admin_name, and input admin's default information, 11:28 mins-->
        <?php

        $checkadmin = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND pass='$pass'");

        $num = mysqli_num_rows($checkadmin);


            if($num >= 1){
                $_SESSION['email']=$email;
                ?>
                <script>
                    alert("Successfully login!");
                    window.location.href="adminhome.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Wrong Email or Password!");
                    window.location.href="index.php";
                </script>
                <?php

            }

    }


    

?>

