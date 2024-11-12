<?php 
/*
Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo.
*/

//Funcion para calcular, si un numero es primo o no?
function esPrimo($numero) {
    // Verificamos si el número es menor que 2, ya que los números menores a 2 no son primos
    if ($numero < 2) {
        return false;
    }

    // Recorremos desde 2 hasta la raíz cuadrada del número
    // Si encontramos un divisor en este rango, el número no es primo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            // Si encontramos un divisor, retornamos false
            return false;
        }
    }

    // Si no encontramos divisores, el número es primo
    return true;
}

// Pedimos al usuario que ingrese un número
echo "Ingresa un número para verificar si es primo: ";
$entrada_usuario = trim(fgets(STDIN)); // Capturamos la entrada y eliminamos espacios en blanco

// Convertimos la entrada a un número entero
$numero_a_probar = (int)$entrada_usuario;

// Verificamos si el número es primo y mostramos el resultado
if (esPrimo($numero_a_probar)) {
    echo "El número $numero_a_probar es primo.\n";
} else {
    echo "El número $numero_a_probar no es primo.\n";
}

/*
fgets() es una función de PHP que lee una línea de entrada de un recurso. En este caso, el recurso es STDIN, que representa la entrada estándar (standard input) del programa, normalmente la consola o terminal desde donde se ejecuta el script.
Cuando se utiliza fgets(STDIN), el programa espera a que el usuario ingrese algún texto y presione "Enter". Luego, captura esa línea de texto como una cadena.
*/

?>