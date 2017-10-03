<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos
$mysqli = new MySQLi("localhost", "root","", "rjabogados");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($mysqli,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:menu.php");
}
else {
    echo "Error en la autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($mysqli);

