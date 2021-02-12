<?php
header('Content-Type: application/json');
require_once("../config/conexion.php");
require_once("../models/Categoria.php");
$categoria=new Categoria();
$body=json_decode(file_get_contents("php://input"),true);
switch($_GET["op"]){
    case "GetAll":
$datos=$categoria->get_categoria();
echo json_encode($datos);        
break;
case "GetID":
    $datos=$categoria->get_categoria_por_id($body["cat_id"]);
    echo json_encode($datos);
    break;
}

?>