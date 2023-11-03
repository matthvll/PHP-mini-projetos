<?php 
include_once '../desafios/index.html';
include("conversor.html");
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST"){
    try{
        $carteira = $_POST["carteira"];
        $dolar_hoje = 1 * 5.03;
        $mydol = $carteira / $dolar_hoje;
        echo "Cotação atual do dólar: $dolar_hoje <br> Você têm: " . round($mydol) . "USD";
    }catch(TypeError){
        echo"Valor inválido!";
    }

}
?>