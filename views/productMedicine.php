<?php
    require './database/connection.php';
    require './model/check_if_added.php';
    
    $class='medicine';
    
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
                                <img src="./img/menta.jpg" alt="medicine">
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
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&clave=3&id=<?php echo $row['id']; ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/ruda.jpg" alt="medicine">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ruda</h3>
                                    <p>Precio:  40.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=10&clave=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/albahaca.jpg" alt="medicine">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Albahaca</h3>
                                    <p>Precio: 40</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=11&clave=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/romero.jpg" alt="medicine">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Romero</h3>
                                    <p>Precio: 40</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=12&clave=3" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
            