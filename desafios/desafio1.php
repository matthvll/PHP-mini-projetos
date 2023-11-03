<?php 
    include("index.html");
    include("desafio1.html");

    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "POST"){
        $valor = $_POST["numero"];
        echo "O antecessor é: ". $valor - 1 . "<br>";
        echo "O Sucessor é: ". $valor + 1;
    }


?>