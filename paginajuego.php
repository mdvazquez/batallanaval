<?php
    require_once 'header.php';
    require_once './clases/Tablero.php';
    $tableroJuego = new app\clases\Tablero();
    $dimensiones = $tableroJuego->getDimensiones();
    //dimensiones tiene una forma de [filas, columnas]
?>
            <div class="row">
                <div class="col-md-6">  
                    <table id='tabla_jugador'>
                        <?php
                          for($filas =0; $filas<$dimensiones[0]; $filas++){
                            echo "<tr>";
                                for($columnas =0; $columnas<$dimensiones[1]; $columnas++){
                                    echo "<td>$filas,$columnas</td>";
                                }
                            echo "</tr>";
                          }
                        ?>
                    </table>
                </div>
                <div class="col-md-6">
                    <table id='tabla_oponente'>
                        <?php
                          for($filas =0; $filas<$dimensiones[0]; $filas++){
                            echo "<tr>";
                                for($columnas =0; $columnas<$dimensiones[1]; $columnas++){
                                    echo "<td>$filas,$columnas</td>";
                                }
                            echo "</tr>";
                          }
                        ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                  <img alt="Jugador 1" src="images\usuario.jpg">
                </div>
                <div class="col-md-2">
                    Jugador 1 vs computadora
                </div>
                <div class="col-md-5">
                    <img alt="Computadora" src="images\computadora.jpg">
                </div>
            </div>
<?php 
require 'footer.php';
?>