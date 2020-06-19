<?php
class Rol extends Conexion {

    function insertRol(){
        $rol = $_POST['rol'];
        $abrev = substr($rol, 0,2 );


        $sql = "INSERT INTO rol (rol,abrev)  VALUES ('$rol', '$abrev') ";

    }
    function DeleteRol(){
        $idrol = $_GET['idrol'];

        $sql = "DELETE * FROM rol WHERE idrol = '$idrol' ";
    }
    function UpdateRol(){
        $idrol = $_GET['idrol'];
        $rol =$_POST['rol'];
        $abrev = $_POST['abrev'];
        $sqlr = "UPDATE  rol SET rol='$rol', abrev='$abrev' WHERE idrol = '$idrol'";
    }
}
