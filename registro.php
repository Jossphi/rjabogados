<?php
include 'conexion.php';
$nombre = $_POST["nombre"];
$apmaterno= $_POST["apmaterno"];
$appaterno = $_POST["appaterno"];
$dni = $_POST["dni"];
$telefono = $_POST["telefono"];
$estado = $_POST["estado"];
$pais = $_POST["pais"];
$region= $_POST["region"];
$ciudad = $_POST["ciudad"];
$fecha = $_POST["fecha"];


$insertar = "INSERT INTO postulantes(nombre,apellidopat,apellidomat,DNI,estadocivil,telefono,pais,region,ciudad,nacimiento) VALUES('$nombre','$apmaterno','$appaterno','$dni','$telefono','$estado','$pais','$region','$ciudad','$fecha')";

//verificar usuario
$verificar_dni = mysqli_query($mysqli,"SELECT * FROM postulantes WHERE DNI = '$dni'");
if(mysqli_num_rows($verificar_dni)>0){
    echo '<script>
    alert("El usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}

$resultado = mysqli_query($mysqli,$insertar);
if(!$resultado){
    echo '<script>
    alert("Error al registrar");
    window.history.go(-1);
    </script>';
}
else{
    echo '<script>
    alert("El usuario ha sido registrado");
    window.history.go(-1);
    </script>';
}

