<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Validador;

class ValidadorTest extends TestCase
{
    private $validador;

    protected function setUp(): void
    {
        $this->validador = new Validador();
    }

    // ================== PROVEEDORES (DEBEN SER STATIC) ==================

    public static function proveedorEsPar(): array
    {
        return [
            [4, true],
            [5, false],
            [0, true],
            [-2, true],
        ];
    }

    public static function proveedorEsPositivo(): array
    {
        return [
            [10, true],
            [0, false],
            [-5, false],
        ];
    }

    // Nuevo proveedor para números negativos
    public static function proveedorEsNegativo(): array
    {
        return [
            [-10, true],
            [0, false],
            [5, false],
            [-1, true],
        ];
    }

    // Nuevo proveedor para campos vacíos
    public static function proveedorEsVacio(): array
    {
        return [
            ['', true],
            [null, true],
            ['Texto', false],
            [' ', false], // Un espacio en blanco no es estrictamente vacío para empty()
        ];
    }

    // ================== PRUEBAS ==================

    #[DataProvider('proveedorEsPar')]
    public function testEsPar($numero, $esperado)
    {
        $resultado = $this->validador->esPar($numero);
        $this->assertEquals($esperado, $resultado);
    }

    #[DataProvider('proveedorEsPositivo')]
    public function testEsPositivo($numero, $esperado)
    {
        $resultado = $this->validador->esPositivo($numero);
        $this->assertEquals($esperado, $resultado);
    }

    // Nueva prueba para esNegativo
    #[DataProvider('proveedorEsNegativo')]
    public function testEsNegativo($numero, $esperado)
    {
        $resultado = $this->validador->esNegativo($numero);
        $this->assertEquals($esperado, $resultado);
    }

    // Nueva prueba para esVacio
    #[DataProvider('proveedorEsVacio')]
    public function testEsVacio($valor, $esperado)
    {
        $resultado = $this->validador->esVacio($valor);
        $this->assertEquals($esperado, $resultado);
    }
}