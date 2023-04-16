<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  

  <?php require_once 'librerias.php'; //mandamos a traer las librerias  
  ?>
    <div class="container-title">
    <img class="izquierda" src="./img/logo.png">
    <img class="derecha" src="./img/itsvcLOGO.png">
    <h2><strong>CALCULADORA DE ECUACIONES DE SEGUNDO GRADO </strong>  </h2>
    </div>
</head>

<body>
  <!-- MANDAMOS A TRAER LOS ESTILOS PARA EMPEZAR A DISEÑAR -->
  <link rel="stylesheet" href="./diseno.css?123">
  <!-- TENER CUIDADO DE QUE TODOS LOS LINKS BOTONES Y ETIQUETAS <a> SE IRAN AL ACTION SACAR DEL FORM PARA MANDAR A OTRO LINK -->
  <form action="verPasos.php" method="POST"> 
    <center>
      <div class="container">
        <h3>¿Qué son las ecuaciones de segundo grado?</h3>

        <p>
          Una ecuación de segundo grado o ecuación cuadrática de una variable es una ecuación que tiene
          la forma de una suma algebraica de términos cuyo grado máximo es dos, es decir,
          una ecuación cuadrática puede ser representada por un polinomio de segundo grado o polinomio cuadrático.
          </p>
        <!-- traemos la imagen de la formula  -->
        <center> <img src="img/form_gener.png"></center>
        <br>

        <label><strong>Ingresa la variable dependiente Ax²</strong> </label>
        <input type="numer" class="form-control" name="numero1" placeholder="Ingresa la variable dependiente" value="">
        <label><strong >Ingresa la variable independiente Bx </strong></label>
        <input type="numer" class="form-control" name="numero2" placeholder="Ingresa la variable independiente" value="">
        <label><strong>Ingresa la variable constante C </strong></label>
        <input type="numer" class="form-control" name="numero3" placeholder="Ingresa la variable constante" value="">
        <br>
        <br>
        <button type="submit" style="background-color:DarkCyan; border-color:SteelBlue; color:white; border-radius:400px; width:200px;" name="calcular">Calcular</button>
        <br>
        <br>
      </div>
    </center>
  </form>
  <div class="cards-info">
      <div class="card-one">
      <h3>Ecuación</h3>
      <img src="./img/ecuacion.png" alt="">
      <button> <a href="./assets/ecuacion.html">¿Qué es?</a></button>
      </div>
      <div class="card-two">
      <h3>Elementos de ecuación</h3>
      <img src="./img/elementsssss.png" alt="">
      <button><a href="./assets/elementos.html">Descubrelo!</a></button>
      </div>
      <div class="card-three">
      <h3>Formula General</h3>
      <img src="./img/elementos.png" alt="">
      <button><a href="./assets/formula-general.html">¿Qué es?</a></button>
      </div>
    </div>
</body>

</html>