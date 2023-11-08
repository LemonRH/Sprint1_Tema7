<?php

use PHPUnit\Framework\TestCase;

require_once 'notas.php';

use PHPUnit\Framework\TestCase;

class CalculadoraNotasTest extends TestCase {
    public function testPrimeraDivision() {
        $calculadora = new CalculadoraNotas();
        $this->assertEquals("Primera division", $calculadora->calcularDivision(8));
    }

    public function testSegundaDivision() {
        $calculadora = new CalculadoraNotas();
        $this->assertEquals("Segunda division", $calculadora->calcularDivision(5));
    }

    public function testTerceraDivision() {
        $calculadora = new CalculadoraNotas();
        $this->assertEquals("Tercera division", $calculadora->calcularDivision(3.5));
    }

    public function testSuspenso() {
        $calculadora = new CalculadoraNotas();
        $this->assertEquals("SUSPENSO", $calculadora->calcularDivision(2.5));
    }

    public function testNotaIncorrecta() {
        $calculadora = new CalculadoraNotas();
        $this->assertEquals("No has introducido un numero correcto.", $calculadora->calcularDivision(-1));
    }
}
//cambiamos un poco la logica de los test para que sean mas simples 

?>
