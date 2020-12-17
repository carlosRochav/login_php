<?php

//Necesito el codigo del controlador
require_once "controller/registroControlador.php";
require_once "controller/plantillaControlador.php";
require_once "model/conexion.php";
require_once "model/modeloFormulario.php";

//Invoco el metodo a traves de la clase de controlador
$conex=conexionDB::dataBase();
//Instruccion para imprimir un objeto
#echo "<h4>";
#print_r($conex);
#echo"</h4";

$nav=new PlantillaControlador;
$nav->nav();

?>