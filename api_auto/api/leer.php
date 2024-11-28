<?php
require_once('../conexion.php');
require_once('../auto.php');

$resultado = Auto::ObtenerAuto($conexion);

if (mysqli_num_rows($resultado) > 0)
{
    $Autito= [];
    while ($fila = mysqli_fetch_assoc($resultado))
{
    $Autito[] = $fila;
}
echo json_encode($Autito);
} else {
    echo json_encode (["message" => "Nose encontraron Autos."]);
}
