<?php

    require './model/check_if_added.php';
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
                                <img src="img/cannon_eos.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Precio: Rs. 36000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Precio: Rs. 40000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Precio: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Comprar Ahora</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
                                <img src="img/olympus.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Precio: Rs. 80000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="?menu=login" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ya esta en tu carrito de compras</a>';
                                            }else{
                                                ?>
                                                <a href="?menu=agregarAlCarro&id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Agregar al carrito</a>
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
            