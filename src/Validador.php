<?php

namespace App;

class Validador
{
    public function esPar($numero)
    {
        return $numero % 2 == 0;
    }

    public function esPositivo($numero)
    {
        return $numero > 0;
    }

    public function esNegativo($numero)
    {
        return $numero < 0;
    }

    // Nueva función para validar si un campo está vacío
    public function esVacio($valor)
    {
        return empty($valor);
    }
}
