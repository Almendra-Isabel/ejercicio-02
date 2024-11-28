<?php
require_once('../conexion.php');
require_once('../auto.php');

$data = json_decode(file_get_contents("php://input"));


if (!empty($data->placa) && !empty($data->modelo) && !empty($data->color))
{

$Autito = new Auto($conexion,$data->placa,$data->modelo,$data->color);

if ($Autito->RegistrarAuto()) 
    {
      echo json_encode(["message" => "Auto registrado correctamente."]);
    } else {
        echo json_encode(["message" => "Error al registrar el auto."]);   
    }
}else{
    echo json_encode(["message" => "Datos incompletos."]);
}