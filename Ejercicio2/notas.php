<?php
class CalculadoraNotas {
    public function calcularDivision($nota) {
        if ($nota >= 6 && $nota < 10) {
            return "Primera division";
        } elseif ($nota >= 4.5) {
            return "Segunda division";
        } elseif ($nota >= 3.3) {
            return "Tercera division";
        } elseif ($nota < 3.3) {
            return "SUSPENSO";
        } else {
            return "No has introducido un numero correcto.";
        }
    }
}

//cambiamos el ejercicio, creamos una clase para calcular notas y luego empleamos la funcion que teniamos para elegir si estará en primera,segunda...

?>
