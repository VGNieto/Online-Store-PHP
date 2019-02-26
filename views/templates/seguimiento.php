<?php

function crearSeguimiento($seguimiento){
    $resultado = "
    <nav id='seguimiento'>
        <div class='nav-wrapper blue lighten-3'>
            <div class='col s12'>";

    foreach ($seguimiento as $valor) {
        $resultado.= "<a href='#!' class='breadcrumb'>$valor</a>";
    }
    $resultado.="
            </div>
        </div>
    </nav>";
    return $resultado;
}