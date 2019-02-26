<?php
include "./controllers/userController.php";
session_start();
function controlarOpcion(){
    if(isset($_REQUEST['op'])){
        $op = $_REQUEST['op'];
    } else{
        $op = "menu";
    }
    switch($op){
        case "menu":if(isset($_SESSION['userID'])){
                        if(isset($_REQUEST['cambiarCategoria'])){
                            $categorias = ["Arneses","Cascos","Mochilas"];
                            $seguimiento = ["Categorías",$_REQUEST['cambiarCategoria']];
                            $seleccionado = $_REQUEST['cambiarCategoria'];
                            $login = true;
                            $nombre = "Víctor";
                            include "./views/templates/header.php";
                            include "./views/index.php";
                            include "./views/templates/footer.php";
                        }else if(isset($_REQUEST['cerrarSesion'])){
                            session_destroy();
                            header("Location: index.php");
                        
                        } else{
                            $categorias = ["Arneses","Cascos","Mochilas"];
                            $seguimiento = ["Categorías","Arneses"];
                            include "./views/templates/header.php";
                            include "./views/index.php";
                            include "./views/templates/footer.php";
                        }


                    }else if (isset($_REQUEST['iniciarSesion'])){
                        $usuario = $_REQUEST['loginUsuario'];
                        $contrasena = $_REQUEST['loginContrasena'];
                        if(comprobarUsuario($usuario,$contrasena) != false){
                            $_SESSION['userID'] = comprobarUsuario($usuario,$contrasena);
                            $_SESSION['userNombre'] = $usuario;
                            $categorias = ["Arneses","Cascos","Mochilas"];
                            $seguimiento = ["Categorías","Arneses"];
                            include "./views/templates/header.php";
                            include "./views/menuPrincipal.php";
                            include "./views/templates/footer.php";
                        }
                    }else{
                        $categorias = ["Arneses","Cascos","Mochilas"];
                        $seguimiento = ["Categorías","Arneses"];
                        $login = true;
                        $nombre = "Víctor";
                        include "./views/templates/header.php";
                        include "./views/index.php";
                        include "./views/templates/footer.php";
                    }
                    
                    break;
        case "404":
                    include "./views/404.php";
                    break;
    }
}

controlarOpcion();