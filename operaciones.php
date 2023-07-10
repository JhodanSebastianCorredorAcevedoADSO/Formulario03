<?php

include "calculadora.php";

function validacion($numero1, $numero2, $numero3)
{
    if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)) {
        return true;
    } else {
        return false;
    }
}

function error()
{
    echo "<span class='text-danger'> Ingresa solo numeros </span>";
}

function resultado()
{
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $calculo = $_POST['calculos'];
        $operacion = new calculadora();

        if (validacion($numero1, $numero2, $numero3)) {
            if ($calculo == "suma"){
                echo $operacion -> sumar($numero1, $numero2, $numero3);
            }elseif ($calculo == "resta"){
                echo $operacion -> resta($numero1, $numero2, $numero3);
            }elseif ($calculo == "multiplicacion"){
                echo $operacion -> multiplicacion($numero1, $numero2, $numero3);
            }elseif ($calculo == "division"){
                echo $operacion -> division($numero1, $numero2, $numero3);
            }
        } else {
            error();
        }
    }
}