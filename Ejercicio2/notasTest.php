<?php

use PHPUnit\Framework\TestCase;

require_once 'notas.php';

class  NotasTest extends TestCase{
    public function testPrimeraDivision(){
        $this->expectOutputString("Primera división\n");
        $this->setInpuStream("5\n");
    }
    public function testSegundaDivision() {
        $this->expectOutputString("Segunda división\n");
        $this->setInpuStream("5\n");
        notas();
    }

    public function testTerceraDivision() {
        $this->expectOutputString("Tercera division\n");
        $this->setInpuStream("3.5\n");
        notas();
    }

    public function testSuspenso() {
        $this->expectOutputString("SUSPENSO\n");
        $this->setInpuStream("2.5\n");
        notas();
    }

    public function testEntradaInvalida() {
        $this->expectOutputString("No has introducido un numero correcto.\n");
        $this->setInpuStream("texto\n");
        notas();
    }
    private function setInpuStream($input) {//probar diferentes entradas para la ejecucion de pruebas
        $stream = fopen('php://memory', 'r+');
        fwrite($stream, $input);
        rewind($stream);
        stream_set_blocking(STDIN, 0);
        stream_set_blocking($stream, 0);
        stream_copy_to_stream($stream, STDIN);

}

?>