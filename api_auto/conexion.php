<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database ='bd_autos';

$conexion = mysqli_connect($host,$username,$password,$database);
if (!$conexion){
    die ("Error en la conexion : " . mysqli_connect_error());
}