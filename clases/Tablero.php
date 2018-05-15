<?php

namespace app\clases;

/**
 * Description of Tablero
 *
 * @author MaxiDaniel
 */
class Tablero {
    private $dimensiones = [5,5];
    public function getDimensiones(){
        return $this->dimensiones;      
    }
}
