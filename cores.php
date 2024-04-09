<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="">
    <title>Resultado</title>
    <!--Comecando o php dentro do head:-->
    <?php

    //PHP é case sensitive
    //$_GET --> pois usamos method = "GET" lá no HTML
    //GET serve para pegar o valor da variavel, que esta sendo definida la no html
    //["name"] --> name dos inputs e selects lá do html
    //echo --> significa INSERIR, Serve para diversos elementos (tags e textos, variaveis...) tanto no HTML quanto CSS
    $texto = $_GET["texto"];
    $tamanho = $_GET["tamanho"];
    $cor = $_GET["cor"];
    $background = $_GET["imagem"];
    $fonte = $_GET["fonte"];


    ?>
    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
            font-family: <?php echo $fonte; ?>;
            padding: 1vh 2vw;
            border-radius: 10px;
            background-color: grey;
            margin: 2vh 0vw;
        }

        body{
            padding-left: 50vw;
            background-image: url(<?php echo $background; ?>);
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        a{
            text-decoration: none;
            color: white;
            font-size: 1.4em;
            transition: 0.25s;
        }

        a:hover{
           color: aquamarine;
           transition: 0.25s;
        }
    </style>
</head>
<body>
    
<h1>Resultado</h1>

    <?php 
        echo "<span class='texto'> $texto </span>";
    ?>

    <a href="cores.html">Voltar</a>

</body>
</html>