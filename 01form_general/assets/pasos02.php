<?php 
session_start();
$num1=$_SESSION['numero1'];
$num2=$_SESSION['numero2'];
$num3=$_SESSION['numero3'];
$inve_2=$_SESSION['inve_2'];
$resu_derecho=$_SESSION['resu_derecho'];
$resultado=$_SESSION['resultado'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pasos02.css">
    <title>Pasos</title>
</head>
<body>
    <section class="container">
        <div class="pasos02">
        <h1>Pasos para solucionar la ecuación</h1>
        <p>Tenemos una ecuación de primer grado de la siguiente forma:</p>
        <p>
            <?php echo $num1;?> x¹ + <?php echo $num2;?> = <?php echo $num3;?>
        </p>
        <p>Donde vamos a despejar X para saber su resultado, asi que se procede a mover las constantes a la derecha de la siguiente manera:</p>
        <p>
            <?php echo$num1;?>x¹ = <?php echo $num3;?> + (<?php echo $num2;?>)
        </p>
        <p>Sumamos los terminos</p>
        <p>
            <?php echo $num1;?>x¹ = <?php echo $resu_derecho;?>
        </p>
        <p>Se mueve el numero de la variable X que esta multiplicando pasa diviendo :</p>
        <p>
        x¹ = <?php echo$resu_derecho; ?> / <?php echo$num1;?>
        </p>
        <p>Como resultado final obtenemos que </p>
        <p>
        x¹ =  <?php echo$resultado; ?>
        </p>
    </div>
    <button><a href="./ecuation-two.php">Volver</a></button>
    </section>
</body>
</html>