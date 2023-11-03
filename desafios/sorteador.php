<?php 
    include("index.html");
    include("sorteador.html");
    // rand() - 1951 - Linear congrential generator
    // algorítmo antigo e lento
    // mt_rand() - 1997 - Mersenne Twister. 4x mais rapido que o anterior

    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "POST"){
        if(empty($_POST["Min"])){
            echo"Insira um valor mínimo";

        }
        elseif(empty($_POST["Max"])){
            echo"Insira um valor máximo";
        }else{
            $min = $_POST["Min"];
            $max = $_POST["Max"];
            $num_sorteio = mt_rand($min, $max);
            echo"O número sorteado foi: $num_sorteio <br>";

        }
        
    }

?>