<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Empleado;

class CalculoSalario extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testCalcularSalario()
        {
            $empleado = new Empleado();
            $salario = $empleado->calcularSalario(40, 25); // 40 horas trabajadas a $25 por hora

            $this->assertEquals(1000, $salario); // Espera un salario de 1000
        } 
}
