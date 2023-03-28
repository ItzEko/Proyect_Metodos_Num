<?php 
session_start();

require_once '../assets/conexion.php';


if(!empty($_POST["btnlogin"])){
    if(!empty($_POST["email"]) and !empty($_POST["pswd"])){
        $corr=$_POST["email"];
        $pass=$_POST["pswd"];
$conexion=conexion();
        $sql="SELECT * FROM login01calculadora WHERE correo='$corr' and contraseña='$pass'";
$resultado =mysqli_query($conexion,$sql);
if($ok=$resultado->fetch_object()){

    $_SESSION["myid"]=$ok->id_login;
    $_SESSION["myemail"]=$ok->correo;
    header("location:../principal.php");
}else{
    echo "<div class='alert alert-danger'>Acceso denegado </div>";
}
    }else{
        echo "<div class='alert alert-primary'>los campos estan vacios </div>";
    }
}


?>