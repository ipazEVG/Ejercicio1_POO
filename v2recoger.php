<?php
require_once 'v2operaciones.php';
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operadores = $_GET['operadores'];

    $objeto = new operaciones(); //Como estoy fuera de la clase creo un objeto para referenciar algo que se encuentra dentro de la clase.
    switch ($operadores){
        case 'suma':
        $resultado = $objeto-> suma($num1, $num2);
        break;
        case'resta':
        $resultado = $objeto->resta($num1, $num2);
        break;
        case 'multiplicacion':
        $resultado = $objeto->multiplicacion($num1, $num2);
        break;
        case 'division':
        $resultado = $objeto->division($num1, $num2);
        break;
    }
    echo "El resultado es : ".$resultado;
?>