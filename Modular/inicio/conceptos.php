<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo For</title>

    <script src="../js/mostrar.js"></script>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <?php
        require_once('../header.php');
    ?>
    <h1>5 conceptos basicos de programacion</h1>
    <ol>

        <li value="1" >Algoritmo</li>
        <p>Son la secuencia de pasos lógicos que resuelven un problema, ¡son la base de la programación! Dominar los algoritmos te ayudará a pensar como programador y a implementar tus soluciones en cualquier lenguaje.</p>

            <img src="../imagenes/algoritmos.png" alt="">

        <li value="2" >Variable</li>
        <p>Es una unidad de almacenamiento y recuperación de datos, datos que utilizarás más adelante al programar. Se identifican con un nombre único y sus valores pueden cambiar.
            También se pueden definir como espacios reservados en la memoria RAM para almacenar datos. Se reservan dándoles un nombre y un valor a través del signo =. Es fundamental que comprendas las variables porque ellas son la base de los componentes de todo código.</p>

            <img src="../imagenes/variable.png" alt="">

        <li value="3" >Funcion</li>
        <p>Es un bloque de código reutilizable que realiza tareas específicas. Se le llama a través del comando function. Cada vez que llamemos a esa función se ejecutará ese código, por lo que se ahorra tiempo en escribir línea por línea.</p>

        <img src="../imagenes/funciones.png" alt="">

        <li value="4" >Tipos de dato</li>
        <p>Son los diferentes tipos de variables en las que se clasifica la información. Por ejemplo, los más utilizados son Number, String, y Boolean.</p>

        <ol>
            <li>Numero: 1, 2, 3</li>
            <li>String (Cadena de texto): "EDteam"</li>
            <li>Boolean: se utilizan cuando hay dos opciones disponibles en una pregunta “Sí, o No” false o true</li>
        </ol>

        <img src="../imagenes/datos.png" alt="">

        <li value="5" >Estructuras de control</li>
        <p>El código se lee de arriba hacia abajo. Pero estas estructuras permiten que el código se lea de diferentes maneras. Son el caso de los ciclos y las condicionales:
            <ol>
                <li>Ciclo: Un ciclo repite un bloque de código las veces que sean necesarias hasta que se deje de cumplir una condición.</li>
                <li>Condicionales: La condicional if permite que el código tome decisiones en base a ciertos parámetros. Por ejemplo, si la condición se cumple, el programa hará algo, si no se cumple, hará otra cosa.</li>
            </ol>
        </p>

        <img src="../imagenes/if.png" alt="">

    </ol>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
<?php
    require_once('../footer.php');
?>
</html>