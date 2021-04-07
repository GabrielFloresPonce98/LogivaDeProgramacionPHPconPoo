<?php
require('problemas.php');
$P = new problemas();
$P -> sethorasTrabajador(8);
$P -> settarifaHorario(1000);
$P -> settasaDeImpuesto(50);

$P -> horaLaborandoProblema1();
$P -> operacionesDatos(10,4);
$P -> calcularVelocidad(20);
$P -> calcularBaseTriangulo(10,13);
$P -> cambioDeVariables(5,6);
$P -> calcularMetros(1.5,60);
$P -> promedio(8,7,10);
$P -> Encuesta("A","B","B","C");
$P -> serieFibonacci(6);
$P -> factorial(5);


echo $P -> getmensajeSoluciones() . "<br>";


?>