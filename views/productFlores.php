<?php
    require './database/connection.php';
    require './model/check_if_added.php';
    
    $class='flores';
    
    $sql_query = "SELECT * FROM `items` WHERE class='$class'; ";
    
    $result=mysqli_query($con,$sql_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
?>

            <div class="container">
                <div class="jumbotron">
                    <h1>ELIGE Y COMPRA!</h1>
                    <p>            </p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="./img/rosaRoja.jpg" alt="Cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3><?php echo $row['name']; ?></h3>
                                    <p>Precio: <?php echo $row['price']; ?></p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&clave=2&id=<?php echo $row['id']; ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="img/RosaRosada.jpg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Rosa Rosada</h3>
                                    <p>Precio:  70.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=6&clave=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="img/hibiscusAmarillo.jpg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Hibiscus</h3>
                                    <p>Precio: 60</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=7&clave=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="">
                                <img src="img/gardemia.jpg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gardemia</h3>
                                    <p>Precio: 75</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=8&clave=2" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                
                
            </div>
            