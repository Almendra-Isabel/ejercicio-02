<?php
class Auto {
    public $placa, $modelo, $color;
    public $conexion;

    public function __construct($conexion,$placa,$modelo,$color)
    {
    $this->conexion = $conexion;
    $this->placa = $placa;
    $this->modelo = $modelo;
    $this->color = $color;
    }

    public function RegistrarAuto()
    {
        $sql  = "INSERT INTO `auto`(`placa`, `modelo`, `color`) VALUES ('$this->placa','$this->modelo','$this->color')";
        return mysqli_query($this->conexion, $sql);
    }

    public static function ObtenerAuto($conexion)
    {
        $sql = "SELECT * FROM `auto`";
        return mysqli_query($conexion, $sql);
    }

    public function Actualizar ($id)
    {
       $sql = "UPDATE `auto` SET placa='$this->placa',modelo='$this->modelo',color='$this->color' WHERE id=$id";
       return mysqli_query($this->conexion, $sql);
    }

    public static function EliminarAuto($conexion,$id)
    {
        $sql = "DELETE FROM `auto` WHERE id=$id";
        return mysqli_query($conexion, $sql);

    }
}