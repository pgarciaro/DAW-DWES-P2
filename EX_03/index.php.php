<?php
$paises =   array('ESP' => (array('paises'=>'España','este_codigo'=>'724')),
            'FRA'=>(array('paises' =>'Francia','este_codigo'=>'33')),
            'COS'=>(array('paises' => 'Costa Rica', 'este_codigo'=>'506')),
            'COR'=>(array('paises' => 'Corea','este_codigo'=>'82')),
            'URU'=>(array('paises' => 'Uruguay','este_codigo'=>'598')),
            'MAR'=>(array('paises' => 'Marruecos','este_codigo'=>'212')));

foreach ($paises as $codi => ['paises' => $paises , 'este_codigo' => $numero_codigo]) {
    echo ' El pais ' .$paises . ' usa el codigo ' . $codi .  ' con codigo numerico ' .$numero_codigo;
    echo '<br>';
}

?>


