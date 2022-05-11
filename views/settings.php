<?php

    require './database/connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>



            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Cambiar contrase&ntilde;a</h1>
                        <form method="post" action="./model/setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Contrase&ntilde;a antigua">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="Nueva contrase&ntilde;a">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Repetir la nueva contrase&ntilde;a">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Cambiar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>





