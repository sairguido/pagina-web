<?php
require_once '../modelo/conexion.php';
class Guardar extends Conexion{
    public function registro(){

$sql= Conexion::conectar()->prepare("INSERT INTO myform(nombre,email,telefono,mensaje) VALUES(:nombre, :email, :telefono, :mensaje)");

$sql->bindParam(":nombre", $_POST["nombre"], PDO::PARAM_STR);
$sql->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
$sql->bindParam(":telefono", $_POST["telefono"], PDO::PARAM_STR);
$sql->bindParam(":mensaje", $_POST["mensaje"], PDO::PARAM_STR);
    }
};
$hola =new Guardar;
$hola->registro();
    header('location: ../index.php?enviar=ok');
?>

