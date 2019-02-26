<?php

function crearConexion(){
    
    return mysqli_connect("localhost","root","","tiendaVirtual");
}

function comprobarUsuarioDB($usuario,$contrasena){
    $conexion = crearConexion();

    $consulta = "select IDUsuario from usuario where Login='$usuario' and Password='$contrasena'";

    $ejecucion = mysqli_query($conexion,$consulta) or die("Problemas;".mysqli_error($conexion));

    if(mysqli_num_rows($ejecucion)>0){
        return $resultado = mysqli_fetch_array($ejecucion)[0];
    } else{
        return false;
    }

}