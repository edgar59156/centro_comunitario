<form method="POST" action="registro.php?accion=register">
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <h1>Registrar cuenta</h1>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre"  name="nombre"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apellido 1"  name="apaterno"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apellido 2"  name="amaterno"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="correo"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" name="contrasena"/>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="Guardar" value="Guardar"/>
                </div>
            </div>
        </div>
        </form>