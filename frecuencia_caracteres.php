<?php
// Función para contar la frecuencia de cada carácter en una cadena de texto (con soporte UTF-8)

function frecuenciaCaracteres($texto) {
    $frecuencia = [];
    for ($i = 0; $i < mb_strlen($texto, 'UTF-8'); $i++) {
        $caracter = mb_substr($texto, $i, 1, 'UTF-8');
        if (array_key_exists($caracter, $frecuencia)) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    return $frecuencia;
}

echo "Ingresa una cadena de caracteres: ";
$texto = trim(fgets(STDIN)); // Asegúrate de que esto esté funcionando correctamente

$resultado = frecuenciaCaracteres($texto);
print_r($resultado);
?>