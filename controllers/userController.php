<?php

include "./model/userModel.php";

function comprobarUsuario($usuario,$contrasena){
    return comprobarUsuarioDB($usuario,$contrasena);
}