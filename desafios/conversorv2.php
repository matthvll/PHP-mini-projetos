<?php 
    //Incluindo a página Index e o layout básico do conversor V1 
    include("index.html");
    include("conversor.html");

    $inicio = date("m-d-Y",strtotime("-7 days"));
    $fim = date("m-d-Y");


    $method = $_SERVER["REQUEST_METHOD"];
    if($method == "POST"){

        //Consumindo API do banco central para informar a cotação do dólar mais recente
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotação = $dados["value"][0]["cotacaoCompra"];

        //Capturando e armazenando o input do usuário dentro de um Try/Except
        // para prevenir que seja exibido algum erro
        try{
            $carteira = $_POST["carteira"];
            $mydol = $carteira / $cotação;
            echo "Cotação atual do dólar: $cotação <br> Você têm: " . round($mydol) . "USD";
        }catch(TypeError){
            echo"Valor inválido!";
        }
}

?>
