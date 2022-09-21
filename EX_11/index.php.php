<?php
function mayusculas($cadena)
{
    return $cadena === strtoupper($cadena);
}
$cadenas = ["Mayuscula", "MAYUSCULA", "mayusucula"];
foreach ($cadenas as $cadena) {
    if (mayusculas($cadena)) {
        echo "$cadena esta escrito en mayúscula\n";
        echo '</br>';
    } else {
        echo "$cadena no esta escrito en mayúscula\n";
        echo '</br>';
    }
}