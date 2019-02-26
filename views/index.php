<?php 
include "./views/templates/item.php";
include "./views/templates/seguimiento.php"; 
include "./views/templates/filtros.php";
 ?>

<main class="col s12 row">
    <br>
<div class="col s12 m12 l2 xl2 white row">

    <ul>
        
        <li class="col s12"><h6><button type="submit" class="botonVacio">Categorías</button></h6><br></li>

        <ul class="col s12 row">
            <form action="index.php" method='post'> 
                <div class="collection">
                <?php
                    foreach ($categorias as $value) {
                        if(isset($seleccionado) &&$value == $seleccionado){
                            echo "<li> <a class='collection-item center-align blue lighten-1 white-text active '><button type='submit' name='cambiarCategoria' class='botonVacio' value='$value'> $value</button></a> </li> <hr>";

                        } else{
                            echo "<li> <a class='collection-item center-align blue lighten-1 white-text'><button type='submit' name='cambiarCategoria' class='botonVacio' value='$value'> $value</button></a> </li> <hr>";

                        }
                    }
                ?>
                </div>
            </form>
        </ul>

        <?php
            echo crearFiltros();
        ?>

    </ul>


</div>


<div class="col s12 m12 l10 xl10 azure row"  style="margin-left:10px">
    
        <?php 
        
        echo crearSeguimiento($seguimiento);
        $items = [[1,"Kit Escalada Petzl Corax 2018","109,95 €","./img/arneses/Kit%20Escalada%20Petzl%20Corax%202018.jpg","80,95 €"],
        [1,"Arnes de Escalada Mammut OPHIR 3 ","69,90 €","./img/arneses/Arnes%20de%20Escalada%20Mammut%20OPHIR%203.jpg","80,95 €"],
        [1,"Arnes Rock Empire 4B Slight","79,95 €","./img/arneses/Arnes%20Rock%20Empire%204B%20Slight.jpg","80,95 €"]];
                echo crearItems($items); ?>


</div>

</main>

   