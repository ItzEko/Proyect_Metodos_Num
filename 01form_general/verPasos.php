<?php
if (isset($_POST["calcular"])) {
  $numero1 = $_POST["numero1"];
  $numero2 = $_POST["numero2"];
  $numero3 = $_POST["numero3"];

  $raiz = ($numero2 ** 2) - 4 * ($numero1 * $numero3);
  $raiz2 = sqrt($raiz);
  $resultado1 = - ($numero2) + ($raiz2);
  $resultado2 = ($resultado1) / (2 * $numero1);
  $resultado3 = - ($numero2) - ($raiz2);
  $resultado4 = ($resultado3) / (2 * $numero1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <?php require_once 'librerias.php' ?>
</head>

<body>
  <!-- aqui hacemos el enlace de el diseño en css de nuestro codigo para la parte de los pasos  -->
  <link rel="stylesheet" href="../01form_general//diseño2.css">
  <section>
    <center>
      <img class="derecha" src="./img/itsvcLOGO.png">
    </center>
    <br>
    <h2 ; class="lines-effect"><strong> Pasos para la solucion de ecuaciones de segundo grado</strong> </h2>
    <hr>
    <p>Aqui se muestran los pasos que debes seguir para resolver la ecuacion de segundo grado por medio de la formula general
      y como llegar a los resultados que aparacen en la calculadora.
      Los resultados son los siguientes:
    </p>

    <!-- aqui comienzaa mostrar los datos de x1 y x2 -->
    <div class="container">
      <img src="./img/gatitoss.png" alt="">
      <p><?php echo ("<strong style='color:black';>  X1 es : $resultado2 </strong>");
          echo ('<br>');
          echo ('<br>');
          echo ("<strong style='color:black';>  X2 es : $resultado4 </strong>");
          ?>
      </p>
    </div>
    <!-- termina la revelacion de x1 y de x2 jeje  -->
    <h4> <strong> El primer paso es resolver la parte de la raiz cuadrada </strong></h4>
    <div class="contenedor1">
      <img src="img/raizcuadratic.png" alt="">
      <p>
        <?php
        echo ("(($numero2)² -4 ($numero1) ($numero3)");
        ?>
      </p>
    </div>
    
    <?php
     #PARTE DE X1
     echo ("<br>");
     echo ("<br>");
     echo ("Por lo que nos saldra un resultado -> ($raiz2)");
     echo ("<br>");
     echo ("<br>");
     echo ("<strong>Como segundo paso se realiza la multiplicacion de la parte de arriba de la formula general</strong>");
     echo ("<br>");
     echo ("<br>");
     echo ("aqui primero vamos a sumar en esta parte para averiguar x1");
     echo ("<br>");
     echo ("-($numero2)  + ($raiz2) ");
     echo ("<br>");
     echo ("Por lo que nos saldra como resultado de la suma el resulatado siguiente -> ($resultado1)");
     echo ("<br>");
     echo ("<br>");
     echo ("<strong>Como tercer paso vamos a realizar la division de la parte de arriba entre (2a)</strong>");
     echo ("<br>");
     echo ("$resultado1 / 2 ($numero1)" );
     echo ("<br>");
     echo ("Por lo que nos dara como resultado el siguiente ->($resultado2)");
     echo ("<br>");
     echo ("<br>"); 
     echo ("<strong style='color:PaleGreen';>Entonces el resultado de  X1 es : ($resultado2) </strong>");
     echo ('<br>');
     echo ("<br>");
    #parte de X2
    echo ("<br>");
    echo ("<br>");
    echo ("<br>");
    echo ("<br>");
    echo ('<strong> Como Cuarto paso es resolver la parte  donde antes como podemos ver </strong>');
    echo ("<br>");
    echo ('<strong>en la parte donde sumabamos para averiguar X1 ahora vamos a restar
    para averiguar X2</strong>');
    echo ("<br>");
    echo ("-($numero2)  - ($raiz) ");
    echo ("<br>");
    echo ("Por lo que nos dara como resultado el siguiente ->($resultado3)");
    echo ("<br>");
    echo ('<strong> Quinto y ultimo paso se procede a realizar la operacion de division</strong>');
    echo ("<br>");
    echo ("con el resultado que nos salio de la resta entre 2a");
    echo ("<br>");
    echo("$resultado3 / 2 ($numero1)");
    echo ('<br>');
    echo ("<strong style='color:PaleGreen';>Entonces tendremos como resultado de nuestro X2 -> ($resultado4)</strong>");
    echo ('<br>');
    echo ('<br>');
    echo ('<br>');
    echo ('<br>');
    ?>

  </section>

</body>

</html>