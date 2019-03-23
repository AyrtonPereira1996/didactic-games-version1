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
        background: url("_images/painter-3177366.png");
        background-repeat: no-repeat;
        background-size: 1400px 800px;
    }

    span.special-word3 {
        color: rgb(0, 139, 93);
        font-weight: bold;
    }

    p.resultSet {
        text-align: left;
    }


    a.button:hover {
        background-color: rgba(220, 20, 60, 0.459);
        transition: 0.5s;
    }
    a.button {
    text-decoration: none;
    padding: 5px;
    background-color: rgba(220, 20, 60, 0.7);
    border-radius: 5px;
    color: white;
    width: 25%;
    border: none;
    box-shadow: 2px 1px 1px rgba(188, 188, 188, 1);
    
    margin-top: 5%;
    font-weight: normal;
}

    ul.list-A{
        margin-top:2.5%;
        margin-bottom:0%;
        list-style: none;
        
    }

    ul.list-A li{
        display:inline-block;
        padding:1px;
    }

    li.home {
        border-radius: 2px;
        width:8%;
        padding:0;
        margin:auto auto auto 94%;
        border-bottom: 2px solid rgba(255, 255, 255, 0.0) ;   
       
    }

    li.home:hover {
        border-bottom: 2px solid crimson;
    }
    </style>

</head>

<body id="tabuada">
    <div id="interface">
        <h1>Jogo da Tabuada!</h1>
        <div id="content-tabuada">
            <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"]:"[Tens que digitar um valor!]";

        echo ("<span class='special-word'>PARABÉNS</span><span class='special-word2'>!</span><br/> <p>Abaixo está a tabuada do fator <span class='special-word2'>Multiplicador</span> que escolheste que foi <span class='special-word2'>". $valor. "</span> o fator <span class='special-word'>Multiplicando</span> neste jogo vai até <span class='special-word'>10</span> depois da multiplicação o  <span class='special-word3'>Produto</span> surge.</p>"); 
       
            for ($c=0; $c<=10; $c++) { 
                $resultado=$valor * $c; 
                echo("<p class='resultSet'><span class='special-word2'> &ne; $valor </span> x <span class='special-word'> $c </span> = <span class='special-word3'> $resultado </span> &larr; <span class='special-word3'> Produto </span>  <br /></p>");
            }
            ?>

            <ul class="list-A">
                <li><a class="button" href="tabuada.php">Reiniciar</a></li>
                <li class="home"><a href="main_page.php"><img src="_images/home1.png"></a></li>
            </ul>

        </div>
    </div>
</body>

</html>