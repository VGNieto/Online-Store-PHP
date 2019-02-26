<?php

function crearFiltros(){


    $resultado = "<li class='col s12'><h6><button type='submit' class='botonVacio'>Filtros</button></h6><br>
    
    <form method='post' action='index.php'>
    <div class='input-field'>
            <input placeholder='Nombre' id='nombreItem' name='nombreItem' type='text' >
            <label for='nombreItem'>Nombre</label>
    </div>
    <div class='input-field'>
            <input placeholder='Precio mínimo' id='precioMinimo' name='precioMinimo' type='number' >
            <label for='precioMinimo'>Precio mínimo</label>
    </div>
    <div class='input-field'>
            <input placeholder='Precio máximo' id='precioMaximo' name='precioMaximo' type='number' >
            <label for='precioMaximo'>Precio máximo</label>
    </div>
    <p>
      <label>
        <input type='checkbox' class='filled-in' checked='checked' />
        <span>Descuento</span>
      </label>
    </p>
    </form>

    ";


    return $resultado;


}