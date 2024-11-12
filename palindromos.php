<?php 

/*
Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones.
*/
//Funcon para calcular su una cadena de texto es palidromo

function palindromo($texto){
    //conversion: texto a minusculas apra verificar sin descriminar mayuscculas y nimusculas
    $texto = strtolower($texto);

    //eliminamos los espacio y caracteres especiales para vergificar mas precisa
    $texto = preg_replace('/[^a-zA-Z0-9]/', '', $texto);

    //invertir el texto
    $invertido = strrev($texto);

    //comparamos texto original con el invertido
    return $texto == $invertido;

}

//peticion de la cadena de caracteres
echo "ingresa una cadena de caracteres para comprobar si es palindromo: ";
$usuario = trim(fgets(STDIN)); //leer entrad y eliminar espacion

//vereificar si $usuario es palindromo

if (palindromo($usuario)) {
    echo "El texto ingresado es palíndromo.\n";
} else {
    echo "El texto ingresado no es palíndromo.\n";
}



?>