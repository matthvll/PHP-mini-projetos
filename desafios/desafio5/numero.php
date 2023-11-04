<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
</head>
<body>
    <main>
    <h1>Analisador de número real</h1>
    <?php 
        $num = $_POST["n"] ?? 0;
        echo "<p>Analisando o Número <strong>".number_format($num,3,",",".")."</strong> informado pelo usuário </p>";
        $int = (int) $num;
        $fra = $num - $int; #Capturando a parte fracionária do input
        // Formatando a variável $int para ser exibida com 0 casas decimais
        echo "<ul><li> A parte inteira da lista é <strong>".number_format($int,0,",",".")."</strong></li>";
        echo "<li> A parte fracionária do número é: <strong>".number_format($fra,3,",",".")."</strong> </li></ul>";

    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>