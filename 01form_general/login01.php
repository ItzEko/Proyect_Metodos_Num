<div class="login">
    <link rel="stylesheet" href="./css/login01css.css">
	<h1>Bienvenid@ </h1>
    <p>Calculadora de ecuaciones de segundo grado</p>
    <form action="controller/login.php" method="POST">
    	<input type="text" id="email" name="email"placeholder="Ingresa tu correo" required="required" />
        <input type="password" id="pswd" name="pswd" placeholder="Ingresa tu contraseña" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="btnlogin">Ingresar!</button>
    </form>
</div>