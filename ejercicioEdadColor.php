<?php
$alumnos = [
   // nombre, género, edad
   ['Atienza Bermúdez, Alejandro', 'm', 19],
   ['Calderer Sánchez, Lucas', 'm', 19],
   ['Cano Merino, Carlos', 'm', 18],
   ['Chari, Abdelali', 'm', 21],
   ['García Zarco, Francisco José', 'm', 22],
   ['Gómez Pérez, Samuel', 'm', 23],
   ['Iáñez Navarro, Daniel', 'm', 20],
   ['López Lasheras, Alan', 'm', 18],
   ['Maldonado Cabezas, Francisco', 'm', 23],
   ['Martín Arias, Carlos', 'm', 19],
   ['Moreno González, Alexandra', 'f', 20],
   ['Muñoz Moreno, Elisabet', 'f', 35],
   ['Ourhzif, Aymane', 'm', 18],
   ['Sánchez Ortiz, Emilio David', 'm', 22],
   ['Sánchez Rodríguez, Beatriz', 'f', 22],
   ['Torres Gómez, Ignacio', 'm', 20],
   ['Uréndez Jiménez, Alba', 'f', 19],
   ['Uribe Aranda, Francisco', 'm', 20],
   ['Velasco Clavero, Pablo', 'm', 23],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Visualizando el array (con edad) </h1>
    
    <table border="1">
        <tr>
            <td>Alumno</td>
            <td>Género</td>
            <td>Edad</td>
        </tr>
        <?php
            foreach($alumnos as $alumno) {
                if($alumno[2] % 2 == 0) {
                    $color = 'lightblue';
                } else {
                    $color = 'lightgreen';
                }
        ?>
        <tr style="background-color: <?= $color ?>;">
            <td><?= $alumno[0] ?></td>
            <td><?= $alumno[1] ?></td>
            <td><?= $alumno[2] ?></td>
        </tr>
        <?php
            };
        ?>
    </table>
    
</body>
</html>