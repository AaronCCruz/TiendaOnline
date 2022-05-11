<?php
    session_start();
    require '../database/connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
    $old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
    $email=$_SESSION['email'];
    //echo $email;
    $password_from_database_query="select password from users where email='$email'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    //echo $row['password'];
    if($row['password']==$old_password){
        $update_password_query="update users set password='$new_password' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "Su contraseña ha sido actualizada.";
        echo '<script>window.location.href="../index.php?menu=home"</script>';
        ?>

        <?php
    }else{
        ?>
        <script>
            window.alert("Contrasena equivocada!!");            
        </script>
        echo '<script>window.location.href="../index.php?menu=config"</script>';
        <?php
        //header('location:settings.php');
    }
?>