
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ecuation-two.css">
    <title>Ecuaciones de primer grado</title>
</head>
<body>
    <section class="container">
    <h1> Ecuaciones de primer grado</h1>
        <span>Calculadora que realiza ecuaciones donde el lado izquierdo de la igualdad hay una x</span>
        <span>De la forma Ax + B = C </span>
        <div class="container-prob">
            <form action="ecuation-two.php" method="POST">
            <input type="number" name="numero1">
            <img src="../img/equis.png" alt="">
            <input type="number" name="numero2">
            <img src="../img/iguala.png" alt="">
            <input type="number" name="numero3">
            <input class="btn" type="submit" name="calcular" value="resolver">
            <?php 
    if (isset($_POST['calcular'])) {
        $num1=$_POST['numero1'];
        $num2=$_POST['numero2'];
        $num3=$_POST['numero3'];

        $inve_2=-1*($num2);

        $resu_derecho=$num3+($inve_2);

        $resultado=$resu_derecho/$num1; 
        session_start();
        $_SESSION['numero1']=$num1;
        $_SESSION['numero2']=$num2;
        $_SESSION['numero3']=$num3;
        $_SESSION['inve_2']=$inve_2;
        $_SESSION['resu_derecho']=$resu_derecho;
        $_SESSION['resultado']=$resultado;
        ?>
            </form>
            <div class="container-result">
            <p><strong>X = <?php echo $resultado; ?></strong> </p>


        <?php } ?>
            </div>
        </div>

    </section>
    <div class="buttons">
                <button><a href="../principal.php">Volver</a></button>
                <button><a href="./pasos02.php">Ver pasos</a></button>
    </div>
</body>
</html>
