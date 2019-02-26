<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</head>
<body>
    <div class="row">
        <!-- Modal Structure -->
        <div id="modalInicioSesion" class="modal">
            <form action="index.php"  method="post">
                <div class="modal-content">
                    <h4>Iniciar Sesión</h4></br>
                    
                    <div class="input-field">
                        <input placeholder="Usuario" id="Usuario" name="loginUsuario" type="text" class="validate">
                        <label for="Usuario">Usuario</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <input placeholder="Contraseña" id="Contraseña" name="loginContrasena" type="password" class="validate">
                        <label for="Contraseña">Contraseña</label>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn" name="iniciarSesion">Iniciar sesión</button>
                </div>
            </form>
            
        </div>

        <!-- Modal Structure -->
        <div id="modalRegistro" class="modal">
            <form action="index.php" method="post">
                <div class="modal-content">
                    <h4>Registrarse</h4></br>
                    
                    <div class="input-field">
                        <input placeholder="Nuevo Usuario" id="nuevoUsuario"  name="nuevoUsuario" type="text" class="validate">
                        <label for="nuevoUsuario">Usuario</label>
                    </div>
                    <br>
                    <div class="input-field">
                        <input placeholder="Nueva Contraseña" id="nuevaContraseña" name="nuevaContrasena" type="password" class="validate">
                        <label for="nuevaContraseña">Contraseña</label>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn" name="registarUsuario">Registrarse</button>
                </div>
            </form>
            
        </div>

    <header class="col s12 row">
        <nav>
            <div class="nav-wrapper  blue lighten-1">
                <form action="index.php" method="post">
                  
                    <a class="brand-logo center">
                    <button type="submit" class="botonVacio" name="volverAlMenu" style="font-family: 'Staatliches', cursive; margin-left:20px;">EscaladaProfesional.com</button></a>

                    <?php if(!isset($_SESSION['userID'])){?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="modal-trigger" href="#modalInicioSesion">Iniciar Sesión</a></li>
                        <li><a class="modal-trigger" href="#modalRegistro">Registrarse</a></li>

                    </ul>
                    <?php }else{?>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li style="margin-right:10px;">Iniciado como: <?php echo $_SESSION['userNombre'] ?></li>
                        <li><a ><button type="submit" class="botonVacio" name="cerrarSesion"> Cerrar sesión</button></a>
                        
                        </ul>
                    <?php } ?>
                </form>
            </div>
        </nav>
    </header>
        