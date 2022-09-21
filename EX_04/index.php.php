<?php
    $animales = ['gorila' , 'elefante' , 'aguila' , 'leon' , 'tigre'] ;

    $len = 0;
        $len = max(array_map('strlen', $animales ));

        $maximos = array_combine($animales ,array_map('strlen' , $animales));

        $string = array_keys($maximos, max($maximos));

        var_dump($len, $string);

        echo '<br>';

        $len = min(array_map('strlen', $animales ));

        $maximos = array_combine($animales ,array_map('strlen' , $animales));

        $string = array_keys($maximos, min($maximos));

        var_dump($len, $string);
