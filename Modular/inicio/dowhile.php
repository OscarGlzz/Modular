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
    <h1>Introducción</h1>
    <p>Al ciclo do-while también se le conoce como ciclo controlado por condición final porque se caracteriza por evaluar la condición 
        al final del ciclo. Esta estructura permite que primero se ejecute el cuerpo del ciclo y después se evalúe la condición para 
        saber si se puede repetir el ciclo una vez más.</p>
    <img src="../imagenes/dowhile.png" alt="">

    <h1>Funcionamiento</h1>

    <li>Se inicia entrando en el cuerpo del ciclo y ejecutando las instrucciones que se encuentran en éste.</li>
    <li>Después se evalúa la condición al final del ciclo.</li>
    <li>Si la condición es verdadera, se tiene “permiso” para entrar de nuevo en el cuerpo del ciclo y ejecutar sus instrucciones.</li>
    <li>Y nuevamente se evalúa la condición, la cual, si sigue siendo verdadera, permite que el flujo del programa vuelva a entrar al cuerpo del ciclo y a ejecutar las instrucciones ahí contenidas.</li>
    <li>Cuando se evalúe la condición y ésta sea falsa, el flujo del programa sale del ciclo y ahora se ejecuta la Acción2, que representa cualquier instrucción (o conjunto de instrucciones) que estén fuera del ciclo y que, por lo tanto, no se repetirán.</li>

    <img src="../imagenes/dowhile1.png" alt="">

    
    <h1>Error mas común</h1>
    <p>El ciclo do-while debe usarse para los problemas donde primero necesites ejecutar las acciones y después evaluar para saber si debes repetir las acciones o no. En cierto sentido, esto implica primero “dejar pasar” y después “preguntar”.</p>
    <p>En muchas ocasiones cuando estamo empezando podemos confundir un poco el funcionamiento entre este mismo y el while</p>
    <h1>Ejercicio</h1>

    <p>Excelente, ya estas listo para probar tu entendimiento con el ciclo for, aqui te dejo una actividad para que implementes el ciclo en tu entorno de programacion que mas desees</p>
    <p>Para este ejercicio necesito que me muestres los numeros impares del 1 al 40</p>

    <h2>Solción propuesta:</h2>
    <center>
        <input type="button" onclick="mostrarImagen()" value="Mostrar/Ocultar Imagen"><br>
        <img src="../imagenes/for3.png" id="img" style="display: none;">
    </center>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
<?php
    require_once('../footer.php');
?>
</html>