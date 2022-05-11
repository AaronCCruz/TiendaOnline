
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>INICIAR SESI&Oacute;N</h3>
                            </div>
                            <div class="panel-body">
                                <p>Inicie sesi&oacute;n para comprar.</p>
                                <form method="post" action="./model/login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Correo electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 caracteres)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Iniciar sesion" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Aun no tienes una cuenta? <a href="?menu=registro">Registrarse</a></div>
                        </div>
                    </div>
                </div>
           </div>
           