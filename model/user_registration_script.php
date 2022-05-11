<?php
    require '../database/connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Email incorrecto...";
        echo '<script>window.location.href="../index.php?menu=registro"</script>';
        ?>

        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    if(strlen($password)<6){
        echo "La contraseña debe tener minimo 6 caracteres...";
        echo '<script>window.location.href="../index.php?menu=registro"</script>';
        ?>

        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Ya existe un usuario con este correo!");
            
        </script>
        echo '<script>window.location.href="../index.php?menu=registro"</script>';
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
        
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        echo '<script>window.location.href="../index.php?menu=bienvenido"</script>';
        ?>

        <?php
    }
    
?>