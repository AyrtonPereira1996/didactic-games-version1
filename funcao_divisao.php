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
<body>
<div id="interface">

<h1>Jogo da Divisão!</h1>
<center>
    <div id="content-divisao">
       <?php
        $valor_dividendo = isset($_GET["dividendo"]) ? $_GET["dividendo"]:"[Tens que digitar o valor do dividendo!]" ;
        $valor_divisor = isset($_GET["divisor"]) ? $_GET["divisor"]:"[Tens que digitar o valor do dividendo!]";
        $valor_resultado = $valor_dividendo/$valor_divisor;

        echo("BOA! O valor do Dividendo que escolheste é  ". $valor_dividendo. " e o DIVISOR é ". $valor_divisor. ". Observa como é fácil de entender.");
        echo("<table>

        <tr>
            <th><span class='special-word2'>Dividendo</span><br />&darr;</th>
            <th></th>
            <th><span class='special-word'>Divisor</span><br />&darr;</th>
            <th><span class='special-word3'>&nbsp;&nbsp;Quociente </span><br />&nbsp;&nbsp;&nbsp;&darr;</th>
        </tr>
        <tr>
            <td style='margin-right:20%;'>".$valor_dividendo. "</td>
            <td class='table-line'> : </td>
            <td class='table-line'>".$valor_divisor. "</td>
            <td> = <span style='font-size:30pt;' class='special-word3'>".$valor_resultado. "</span></td>
        </tr>

    </table>");
       ?>
        
    </div>
</center>
</div>
    
</body>
</html>