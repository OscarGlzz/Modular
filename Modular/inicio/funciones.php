<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>

    <script src="../js/mostrar.js"></script>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <?php
        require_once('../header.php');
    ?>
    <h1>Funciones</h1>
    <p>Las funciones son un conjunto de procedimiento encapsulados en un bloque, usualmente reciben parámetros, cuyos valores utilizan para efectuar operaciones y adicionalmente retornan un valor. Esta definición proviene de la definición de función matemática 
        la cual posee un dominio y un rango, es decir un conjunto de valores que puede tomar y un conjunto de valores que puede retornar luego de cualquier operación</p>
    <img src="../imagenes/funcion1.png" alt="">
    <p>Recordemos que una función siempre retorna algo, por lo tanto es obligatorio declararle un tipo (el primer componente de la sintaxis anterior), luego debemos darle un nombre a dicha función, para poder identificarla y llamarla durante la ejecución, después al interior de paréntesis, podemos poner los argumentos o parámetros. 
        Luego de la definición de la "firma" de la función, se define su funcionamiento entre llaves; todo lo que esté dentro de las llaves es parte del cuerpo de la función y éste se ejecuta hasta llegar a la instrucción return.</p>

    <h1>Consejos acerca del return</h1>
    <ol>
        <li>
        Cualquier instrucción que se encuentre después de la ejecución de return NO será ejecutada. Es común encontrar funciones con múltiples sentencias return al interior de condicionales, pero una vez que el código ejecuta una sentencia return lo que haya de allí hacia abajo no se ejecutará.
        </li>
        <li>
        El tipo del valor que se retorna en una función debe coincidir con el del tipo declarado a la función, es decir si se declara int, el valor retornado debe ser un número entero.
        </li>
    </ol>
    <img src="../imagenes/funcion2.png" alt="">

    <h1>Detalles para invocar una funcion</h1>
    <ol>
        <li>El nombre de la función debe coincidir exactamente al momento de invocarla.</li>
        <li>El orden de los parámetros y el tipo debe coincidir. Hay que ser cuidadosos al momento de enviar los parámetros, debemos hacerlo en el mismo orden en el que fueron declarados y deben ser del mismo tipo (número, texto u otros).</li>
        <li>Cada parámetro enviado también va separado por comas.</li>
        <li>Si una función no recibe parámetros, simplemente no ponemos nada al interior de los paréntesis, pero SIEMPRE debemos poner los paréntesis.</li>
        <li>Invocar una función sigue siendo una sentencia habitual de C++, así que ésta debe finalizar con ';' como siempre.</li>
        <li>El valor retornado por una función puede ser asignado a una variable del mismo tipo.</li>
        <li>Una función puede llamar a otra dentro de sí misma o incluso puede ser enviada como parámetro a otra.</li>
    </ol>
    <img src="../imagenes/funcion3.png" alt="">

    
    <!-- <h2>Solción propuesta:</h2>
    <center>
        <input type="button" onclick="mostrarImagen()" value="Mostrar/Ocultar Imagen"><br>
        <img src="../imagenes/for3.png" id="img" style="display: none;">
    </center> -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>
<?php
    require_once('../footer.php');
?>
</html>