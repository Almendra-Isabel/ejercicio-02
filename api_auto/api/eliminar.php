<?php
require_once('../conexion.php');
require_once('../auto.php');

$data = json_decode(file_get_contents("php://input"));

if(!empty ($data->id))
{
    if(Auto::EliminarAuto($conexion,$data->id))
    {
        echo json_encode(["message" => "Auto eliminado correctamente ."]);
    } else {
        json_encode(["message" => "Error al eliminar Auto."]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos."]);
}