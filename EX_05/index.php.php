<?php
function crear_piramide ($filas) {
    $cadena = null;
    for ($numero_fila = 0; $numero_fila <= $filas; $numero_fila++) {
        for ($numero_columnas = 0; $numero_columnas < $numero_fila; $numero_columnas++) {
            echo "*";
        }
        echo "<br />";

    }
    for ($numero_fila = 0; $numero_fila <= $filas; $numero_fila++) {
        $cadena ="";
        for ($numero_columnas = $filas-$numero_fila; 0 < $numero_columnas; $numero_columnas--) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}

crear_piramide (10);