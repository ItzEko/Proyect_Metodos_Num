<!-- PARA TRAER LAS VARABLES DE OTRA PAGINA -->
<?Php 
session_start();
$num1=$_SESSION['num1'];
$num2=$_SESSION['num2'];
$num3=$_SESSION['num3'];
$num4=$_SESSION['num4'];
$cambio=$_SESSION['cambio'];
$resu_iz=$_SESSION['resu-iz'];
$cambio2=$_SESSION['cambio2'];
$res_derecho=$_SESSION['res_derecho'];
$divi=$_SESSION['divi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pasos01.css">
    <title>Ecuacion de primer grado</title>
</head>
<body>
    <section class="container">
        <div class="pasos01">
            <h1>Pasos para solucionar la ecuación</h1>
            <p>Tenemos una ecuación de primer grado de la siguiente forma:</p>
            <p><?php 
            echo $num1;?>x¹+(<?php echo$num2;?>) = <?php echo$num3;?> + (<?php echo$num4;?>)x¹ </p>
            <p>Donde vamos a separar los terminos que son terminos constantes de los que tienen variable :</p>
            <p><?php
            echo $num1;?>x¹ +(<?php echo$num4;?>)x¹ = <?php echo$num3;?> + <?php echo$num2;?>
            </p>
            <p>Ahora sumamos los terminos semejantes de cada lado y queria de la siguiente forma :</p>
            <p>
                <?php echo$resu_iz;?> x¹ = <?php echo$res_derecho;?>
            </p>
            <p>Vamos a pasar el numero de la variable que esta multiplicando a X pasa dividiendo</p>
            <p>
            x¹ =  <?php echo$res_derecho;?> / <?php echo $resu_iz?> 
            </p>
            <p>Como resultado final tenemos :</p>
            <p>
            x¹ = <?php echo $divi;?>
            </p>
        </div>
        <button><a href="./ecuation-one.php">Volver</a></button>
    </section>
</body>
</html>