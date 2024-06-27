<div class="container">
    <div class="jumbotron">
        <h2>Login</h2>
    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
                <form action="index.php?metodo=login" method="post">

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nombre">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nombre">
                    </div>   
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="password">Contraseña:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="passw" >
                    </div>   
                </div>

                <br/>

                <div class="form-group">
                    <div class="col-md-12 col-md-off-set-3">
                        <input type="submit" class="btn btn-primary form-control" name="" value="Iniciar Sesion">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
