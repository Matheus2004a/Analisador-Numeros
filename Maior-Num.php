<?php
    session_start();

    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $numDesconhecido = 0;

    if($number1 >= $number2){
        $numDesconhecido = $number1;
        $_SESSION['resp'] = "O maior número é $numDesconhecido";
        header("location: index.php");
    }
    else{
        $numDesconhecido = $number2;
        $_SESSION['resp'] = "O maior número é $numDesconhecido";
        header("location: index.php");
    }
?>