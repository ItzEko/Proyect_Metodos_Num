
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecuaciones de primer grado</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ecuation-one.css">
</head>
<body>
    <section class="container">
        <h1> Ecuaciones de primer grado</h1>
        <span>Calculadora que realiza ecuaciones donde de los 2 lados de la igualdad hay una x</span>
        <span>De la forma Ax + B = C + Dx</span>
        <form action="ecuation-one.php" method="POST">
            <div class="container-prob">
                <input type="number" name="num1">
                <div class="img01">
                    <img src="../img/equis.png" alt="">
                </div>
                <input type="number" name="num2">
                <img src="../img/iguala.png" alt="">
                <input type="number" name="num3">
                <br>
                <input type="number" name="num4">
                <div class="img02">
                    <img src="../img/equis.png" alt="">
                </div>
                <button type="submit" name="realizar">Resolver</button>
                <!-- PARA PASAR VARABLES A OTRA PAGINA -->
                <?php 
                if (isset($_POST["realizar"])) {
                        $num1=$_POST["num1"];
                        $num2=$_POST["num2"];
                        $num3=$_POST["num3"];
                        $num4=$_POST["num4"];
                        $cambio= -1*$num4;
                        $resu_iz= $num1+($cambio);

                        $cambio2=-1*$num2;
                        $res_derecho=$num3+($cambio2);
                        $divi = $res_derecho/$resu_iz;  
                        session_start();
                        $_SESSION['num1']=$num1;
                        $_SESSION['num2']=$num2;
                        $_SESSION['num3']=$num3;
                        $_SESSION['num4']=$num4;
                        $_SESSION['cambio']=$cambio;
                        $_SESSION['resu-iz']=$resu_iz;
                        $_SESSION['cambio2']=$cambio2;
                        $_SESSION['res_derecho']=$res_derecho;
                        $_SESSION['divi']=$divi;
                        ?>
            </div>
            <p>El valor de la x es :  <?php echo $divi?></p>
            <?php }?>
        </form>
    </section>
    <div class="buttons">
                <button><a href="../principal.php">Volver</a></button>
                <button><a href="./pasos01.php">Ver pasos</a> </button>
    </div>
</body>
</html>