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
    <p>Recuerda que un ciclo (loop, lazo) es una estructura de control de flujo cuya función es repetir un conjunto de instrucciones varias veces. Esto nos permite escribir
        la solución una vez, y que se repita con un conjunto diverso de datos.</p>
    <p>Uno de estos ciclos es el ciclo while al cual también se le conoce también como ciclo controlado por condición inicial, porque en este tipo de ciclos, se repite un proceso mientras una condición sea verdadera</p>
    <img src="../imagenes/While.png" alt="">


    <h1>Funcionamiento</h1>

    <li>Se inicia evaluando la condición que es parte del encabezado del ciclo.</li>
    <li>Si la condición es verdadera, se dice que el flujo del programa entra al cuerpo del ciclo, y por lo tanto se puede ejecutar la Acción1. En la práctica, el cuerpo del ciclo puede estar conformado 
        por más de una instrucción, pero para simplificar, he escrito solo la palabra Acción1. Recuerda que si el cuerpo sólo se compone de una acción, no requiere ser encerrado entre llaves, pero si el cuerpo tiene dos o más acciones, requiere las {}.</li>
    <li>Si se ejecutó la Acción1, se regresa a evaluar nuevamente la condición del ciclo. Si esta sigue siendo verdadera, nuevamente el flujo del programa vuelve a entrar al cuerpo del ciclo.</li>
    <li>Cuando se evalúe la condición y ésta sea falsa, el flujo del programa sale del ciclo y ahora se ejecuta la Acción2, que representa cualquier instrucción (o conjunto de instrucciones) que estén fuera del ciclo y que, por lo tanto, no se repetirán.</li>

    <img src="../imagenes/while1.png" alt="">

    <h1>Error mas común</h1>
    <p>No se debe colocar ; después de while(condicion), pues esto indicaría que en el ; termina la estructura y se convertiría en un ciclo infinito.  Recuerda que el símbolo de puntuación ; en C++ (y en muchos otros lenguajes) se utiliza para indicar que la instrucción ha terminado.</p>
    <img src="../imagenes/while2.png" alt="">

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