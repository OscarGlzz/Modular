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
    <h1>Ciclo for</h1>
    <p>El ciclo for es una estructura de control de flujo repetitiva, que se caracteriza por ser un ciclo controlado por contador.  
        Aquí te explicaré su funcionamiento, los elementos que lo componen y los errores comunes en su uso. 
        Todo esto acompañado de ejemplos que incluyen algoritmos, programas en lenguajes Java y animaciones.</p>
    <img src="../imagenes/for.png" alt="">
    <ol>

        <li value="1" >En la "inicialización" se le debe asignar a la variable de control el valor inicial. También puede declararse a la variable inicial.</li>
        <li value="2" >En la "condición" se establece el valor final de la variable de control, es decir, hasta dónde llegará.</li>
        <li value="3" >En la "última" parte se establece la forma en la que la variable de control cambiará su valor dentro del ciclo. Esto puede hacerse de una de dos formas: ya sea incrementando o decrementando el valor inicial.</li>

    </ol>
    <h1>Error mas común</h1>
    <p>Al igual que con el ciclo while, terminar el encabezado del ciclo for con ; impedirá que entre al cuerpo del ciclo. Como ya se ha comentado, el ; se utiliza para indicar que la instrucción ha terminado.</p>
    <img src="../imagenes/for2.png" alt="">

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