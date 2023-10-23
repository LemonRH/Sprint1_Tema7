<?php
function notas(){
    //introduccion nota
    echo "Introduce la nota que has sacado: ";
    $nota = readline();
    if ($nota >= 6 && $nota<10) {
        echo "Primra division";
      } elseif ($nota >= 4.5) {
        echo "Segunda división";
      } elseif ($nota >= 3.3) {
        echo "Tercera division";
      }elseif ($nota < 3.3) {
        echo "SUSPENSO";
      }else{
        echo "No has introducido un numero correcto.";
      }
}
notas();
?>