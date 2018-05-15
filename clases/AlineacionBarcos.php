<?php

namespace app\clases;

/**
 * Description of AlineacionBarcos
 *
 * @author MaxiDaniel
 */
class AlineacionBarcos {
    private $alineacionesPosibles = ['Horizontal','Vertical'];
    public function getAlineacionesPosibles(): array{
        return $this->alineacionesPosibles;
    }
}

