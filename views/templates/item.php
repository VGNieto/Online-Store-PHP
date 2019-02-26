<?php

function crearItems($items){
    
    $resultados = "";
    foreach ($items as $item) {

        $resultados.="
        <div class='col s12 m12 l4 xl4'>
                        <div class='row'>
                            <div class='col s12'>
                                <div class='card'>
                                    <div class='card-image materialboxed responsive-image'>
                                    <img id='imagenItem' class='responsive-image' src=$item[3]>
                                    </div>

                                    <div class='card-content'>
                                        <p> $item[1] </p>
                                        <hr>";
                                        if(isset($_SESSION['userID'])){
                                            $resultados.= 
                                            "<p style='text-decoration: line-through'> P.V.P: $item[2] </p>
                                            <p> P.V.P Cliente: $item[4] </p>";
                                            } else{
                                                $resultados.= "<p> P.V.P: $item[2] </p>";
                                            }
                                    $resultados.="</div>
                                    <div class='card-action'>
                                        <a href='#'> Añadir al carrito </a>
                                    </div>
                                    </div>
                    </div>
                  </div>
             </div>";
    }



    return $resultados;
}
