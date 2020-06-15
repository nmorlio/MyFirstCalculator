<?php

use Calculadora\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{

    
    public function testInciciarConValorEnCero (){

        $operacion=New Calculadora;
        $expected = 0;
        $response = $operacion->value;

        $this->assertSame($expected,$response);
    
    }

    public function testSumarUnNumeroAlValor(){

        $operacion=New Calculadora;

        $expected=2;

        $operacion->sumar (2);

        $this->assertSame($expected,$operacion->value);


    }



}