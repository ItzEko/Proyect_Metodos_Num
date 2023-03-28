<!DOCTYPE html>
<html lang="en">

<head>

  <?php require_once 'librerias.php'; //mandamos a traer las librerias  
  ?>
  <br>
  <center>
    <img class="derecha" src="./img/itsvcLOGO.png">
    <h2><strong>CALCULADORA DE ECUACIONES DE SEGUNDO GRADO </strong>  </h2><img class="izquierda" src="./img/logo.png">
  </center>
  <br>

</head>

<body>
  <!-- MANDAMOS A TRAER LOS ESTILOS PARA EMPEZAR A DISEÑAR -->
  <link rel="stylesheet" href="../01form_general/diseno.css">
  <form action="verPasos.php" method="POST"> <!--//ponemos metodo POST ya que por ese metodo vamos a resolver todas las operaciones -->
    <!-- vamos a hacer una clase de contenedor en un div (EL DIV SIRVE PARA CREAR DIVISIONES O SECCIONES, CAJA PARA CREAR BLOQUES)  -->

    <center>
      <div class="container">
        <h3>¿Que son las ecuaciones de segundo grado?</h3>

        <p style="border: ridge #064B48 4px; font-family:fantasy; font-size:large;" >
          Una ecuación de segundo grado o ecuación cuadrática de una variable es una ecuación que tiene
          la forma de una suma algebraica de términos cuyo grado máximo es dos, es decir,
          una ecuación cuadrática puede ser representada por un polinomio de segundo grado o polinomio cuadrático.
          </p>
        <!-- traemos la imagen de la formula  -->
        <center> <img src="img/form_gener.png"></center>
        <br>

        <label><strong style='color:LightGreen';>Ingresa la variable dependiente Ax²</strong> </label>
        <input type="numer" class="form-control" name="numero1" placeholder="Ingresa la variable dependiente" value="">
        <label><strong style='color:LightGreen';>Ingresa la variable independiente Bx </strong></label>
        <input type="numer" class="form-control" name="numero2" placeholder="Ingresa la variable independiente" value="">
        <label><strong style='color:LightGreen';>Ingresa la variable constante C </strong></label>
        <input type="numer" class="form-control" name="numero3" placeholder="Ingresa la variable constante" value="">
        <br>
        <br>
        <button type="submit" style="background-color:DarkCyan; border-color:SteelBlue; color:white; border-radius:12px;" name="calcular">Calcular</button>
        <br>
        <br>
        

      </div>
    </center>
  </form>
  <?php
  if (isset($_POST["calcular"])) {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    $raiz_adentro = ($numero2 ** 2) - 4 * ($numero1 * $numero3);
    // sqtr nos devuelve el resultado de la raiz
    $raiz = sqrt($raiz_adentro);
    $parte_arriba = (-$numero2) - $raiz;
    $resultado1 = $parte_arriba / (2 * $numero1);

    $parte_arriba2 = (-$numero2) + $raiz;
    $resultado2 = $parte_arriba2 / (2 * $numero1);

    echo ("<center style='color:PaleGreen';>El resultado de X1 es: ($resultado2)</center>");
    echo ("<br>");
    echo ("<center style='color:PaleGreen';>El resultado de X2 es: ($resultado1)</center>");
  }

  ?>
</body>

</html>