<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="?menu=home" class="navbar-brand">Vivero La Concepci&oacute;n</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="?menu=productos"> Productos</a></li>
                           <li><a href="?menu=carro"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
                           <li><a href="?menu=config"><span class="glyphicon glyphicon-cog"></span> Configurar</a></li>
                           <li><a href="?menu=logout"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesi&oacute;n</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="?menu=productos"> Productos</a></li>
                            <li><a href="?menu=registro"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
                           <li><a href="?menu=login"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesi&oacute;n</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>