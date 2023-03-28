
<div class="login">
  <div class="form">
    <?php 
    require_once '../01form_general/lib/librerias.php';
    ?>
    <!-- vamos a traer el codigo del sieño css del login  -->
  <link rel="stylesheet" href="../01form_general/diseñologin.css" > 
  <!-- vamos a poner el logo que sea  -->

  <div class="fadeIn first" align="center">
      <img src="../01form_general/img/logocalcu.png" id="icon" alt="User Icon" />
    </div>
    <div>    <p><strong><center style="color:beige;"> Ingresa a la calculadora!!</center></strong></p></div>
    <!-- Login Form -->
    <!-- CHECAR ESTA URL -->
    <form  action="controller/login.php" method="POST">
      <!-- ARRIBA LA URL -->


      
      <input type="text" class="form-control"  id="email"  name="email" placeholder="Inserta tu Correo">
      <p></p>
      <input type="text" class="form-control" id="pswd" name="pswd" placeholder="Inserta tu Contraseña">
      <p></p>
      <input type="submit"  value="ingresar" name="btnlogin">
      <div class="form-group form-check">
  </div>
</div>
