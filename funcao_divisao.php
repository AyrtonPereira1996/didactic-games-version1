<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jogo da Divisão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <link rel="sortcut icon" type="image/x-icon" href="_images/icone.ico" />
</head>

<body id="body-content-game">
    <div id="interface">
        <a href="main_page.php"><img class="img-link" src="./_images/icons8_Left_104px.png" /></a>

        <h1 class="games-title" style="color: beige;">Jogo da Divisão!</h1>
        <center>
            <div id="content-divisao">
                <?php
        $valor_dividendo = isset($_GET["dividendo"]) ? $_GET["dividendo"]:"[Tens que digitar o valor do dividendo!]" ;
        $valor_divisor = isset($_GET["divisor"]) ? $_GET["divisor"]:"[Tens que digitar o valor do dividendo!]";
        $valor_resultado = $valor_dividendo/$valor_divisor;
        $valor_resto = $valor_dividendo % $valor_divisor;

        echo("BOA! O valor do <span class='special-word2'>DIVIDENDO</span> que escolheste é  ". $valor_dividendo. " e o <span class='special-word'>DIVISOR</span> é ". $valor_divisor. ". Observa como é fácil de entender, quando divides o DIVIDENDO e o DIVISOR achas o <span class='special-word3'>QUOCIENTE</span> da divisão.");
        echo("<table>

        <tr>
            <th><span class='special-word2'>Dividendo</span><br />&darr;</th>
            <th></th>
            <th><span class='special-word'>Divisor</span><br />&darr;</th>
            <th><span class='special-word3'>&nbsp;&nbsp;Quociente </span><br />&nbsp;&nbsp;&nbsp;&darr;</th>
        </tr>
        <tr>
            <td style='margin-right:20%;'><span class='special-word2'>".$valor_dividendo. "</span></td>
            <td class='table-line'> : </td>
            <td class='table-line'><span class='special-word'>".$valor_divisor. "</span></td>
            <td> = <span style='font-size:30pt;' class='special-word3'>".$valor_resultado. "</span></td>
        </tr>

    </table>
    <div class='vertical'>
    <div>".$valor_dividendo."</div>
    <div>".$valor_divisor."</div>  
    <div>".$valor_resultado."</div>    
    <div>".$valor_resto. "</div>
        
        <div></div>
    </div>
    
    
    
    ");
       ?>

            </div>
        </center>
        <a class="imgAdress-item" target="_blank" href="https://pixabay.com/users/stux-12364/">&rarr; Imagem de Stux<a>
    </div>

</body>

</html>