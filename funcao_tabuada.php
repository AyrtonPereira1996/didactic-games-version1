<!--This page is the page that will permit users play the game "Jogo da tabuada"-->
<!DOCTYPE html>
<html>

<head lang="pt-pt">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jogo da Tabuada!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="sortcut icon" href="_images/icone.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <style>
    body {
    background-image: url("_images/painter-3177366.png");
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;   
    }
    </style>

</head>

<body id="body-content-game">
    <div id="interface">
    <a href="main_page.php"><img class="img-link" src="./_images/icons8_Left_104px.png" /></a>
       
        <center>
        <h1 class="games-title" style="color: beige;">Jogo da Tabuada!</h1>
        <div id="content-tabuada">
            <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"]:"[Tens que digitar um valor!]";

        echo ("<span class='special-word'>PARABÉNS</span><span class='special-word2'>!</span><br/> <p>Abaixo está a tabuada do fator <span class='special-word2'>Multiplicador</span> que escolheste que foi <span class='special-word2'>". $valor. "</span> o fator <span class='special-word'>Multiplicando</span> neste jogo vai até <span class='special-word'>10</span> depois de multiplicares o  <span class='special-word3'>Produto</span> surge.</p>"); 
       
            for ($c=0; $c<=10; $c++) { 
                $resultado=$valor * $c; 
                echo("<p class='resultSet'><span class='special-word2'> &ne; $valor </span> x <span class='special-word'> $c </span> = <span class='special-word3'> $resultado </span> &larr; <span class='special-word3'> Produto </span>  <br /></p>");
            }
            ?>

            
                <a class="button" href="tabuada.php">Reiniciar</a>
         

        </div>
        </center>
        <a class="imgAdress-item" target="_blank" href="https://pixabay.com/users/stux-12364/">&rarr; Imagem de Stux<a>
    </div>
</body>

</html>