<?php
    require './database/connection.php';
    require './model/check_if_added.php';
    
    $class='cactus';
    
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
                                <img src="./img/Cactus1.jpg" alt="Cactus">
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
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&clave=1&id=<?php echo $row['id']; ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/Cactus2.jpg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cactus 2</h3>
                                    <p>Precio:  50.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=2&clave=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/Cactus3.jpeg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mickey</h3>
                                    <p>Precio: 50</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=3&clave=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/Cactus4.jpg" alt="cactus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cactus 4</h3>
                                    <p>Precio: 56</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=4&clave=1" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
            