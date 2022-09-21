<?php
$estudiantes = [
    'Pol','Esther','Raul','Pol','Sergio','Christian','Joel','Ricard','Alejandro','Alex', 'Alejandro','Adria', 'Nil','Jordi'
];
?>
<DOCTYPE html>

    <body>
        <h1>ALUMNOS DE CLASE</h1>
        <ul>
            <?php
                foreach ($estudiantes as $alumno) {
                    echo '<li>' . $alumno . '</li>';
                }
            ?>
        </ul>
        <?php
        echo 'en la clase hay un total de ' . count($estudiantes) . ' alumnos';
        ?>

    </body>
</DOCTYPE>
