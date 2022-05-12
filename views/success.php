<?php
    require 'database/connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
?>

        <div>

            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Su oreden ha sido confirmada. <a href="?menu=productos">Click aqui</a> para hacer otra compra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

