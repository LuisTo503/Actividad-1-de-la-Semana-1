<?php 
//Tarea 1 de HP
//Problema de la serie Fibonacci:
//Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.

function generarFibonacci($n) {
    // Verificamos si el número n es válido (mayor o igual a 1)
    if ($n < 1) {
        echo "Por favor, ingresa un número mayor o igual a 1.\n";
        return;
    }

    // Inicializamos un arreglo para almacenar la serie Fibonacci
    $serie = [];

    // Primer término de la serie es 0
    $serie[] = 0;

    // Si n es mayor a 1, añadimos el segundo término, que es 1
    if ($n > 1) {
        $serie[] = 1;
    }

    // Generamos la serie sumando los dos términos anteriores
    for ($i = 2; $i < $n; $i++) {
        $nuevo_termino = $serie[$i - 1] + $serie[$i - 2];
        $serie[] = $nuevo_termino;
    }

    // Mostramos la serie Fibonacci generada
    echo "Los primeros $n términos de la serie Fibonacci son: " . implode(", ", $serie) . "\n";
}

generarFibonacci(10);

?>
