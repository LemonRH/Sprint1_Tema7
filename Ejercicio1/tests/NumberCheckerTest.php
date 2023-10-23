<?php
require_once __DIR__ . '/../src/NumberChecker.php'; // Ajusta la ruta según tu estructura de directorios

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

    public function testIsEven() {
        $evenChecker = new NumberChecker(4);
        $oddChecker = new NumberChecker(5);

        $this->assertTrue($evenChecker->isEven());
        $this->assertFalse($oddChecker->isEven());
    }

    public function testIsPositive() {
        $positiveChecker = new NumberChecker(10);
        $negativeChecker = new NumberChecker(-5);

        $this->assertTrue($positiveChecker->isPositive());
        $this->assertFalse($negativeChecker->isPositive());
    }

}
