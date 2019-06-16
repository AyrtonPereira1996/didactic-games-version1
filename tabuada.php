<!--This page is the page that will permit users play the game "Jogo da tabuada"-->
<!DOCTYPE html>
<html>
<head lang="pt-pt">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jogo da Tabuada!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="sortcut icon" href="_images/icone.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <style>
    body{
    background-image: url("_images/painter-3177366.png");
    background-attachment: fixed;
    -o-background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    
  }
    </style>

</head>
<body id="tabuada">
    <div id="interface">
        <h1 class="game-titles">Jogo da Tabuada!</h1>
        <center>
    <div id="content-tabuada">
        <p><span class="special-word">Bem vindo</span> ao <span class="special-word2">Jogo da Multiplicação</span><span class="special-word3">!</span><br /><br/> Agora segue as <span class="special-word2"> instruçoes </span> abaixo e jamais esquecerás da <span class="special-word">Tabuada</span>.</p>
        <p class="special-phrase">Escolhe o <span class="special-word2">Multiplicador</span> para começares o <span class="special-word">Jogo</span> da <span class="special-word2">Tabuada</span></p>
        <form method="GET" action="funcao_tabuada.php" style="margin-top:2.5%;">
            <label for="id_valor">Escolhe o <span class="special-word2">Multiplicador</span></label>
            <input type="number" name="valor" id="id_valor" value="0" min="0" style="width: 10%; border-radius: 2.5px; border: none; box-shadow: 2px 1px 1px rgba(188, 188, 188, 1); text-align: center; color: darkcyan; height: 40px; font-size: 15pt;"/> ;<br/>
           <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"]:"Multiplicador";
            if ($valor==null) {
                echo (" <p style='margin-top: 1.5%;'> <span class='special-word2'> Multiplicador</span> x <span class='special-word'>Multiplicando</span>  = <span class='special-word3'>Produto</span></p> 
                <br/>");
            }else {
                echo ("<p style='margin-top: 1.5%;'> <span class='special-word2'>". $valor."</span> x <span class='special-word'>Multiplicando</span>  = <span class='special-word3'>Produto</span></p> 
                <br/>");
            }
           ?> 
            
            <input type="submit" class="button-play" value="JOGA!"/> 

        </form>

    </div>
    </center>
</div>
</body>
</html>