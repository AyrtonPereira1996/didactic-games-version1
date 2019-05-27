<!--This page will permit users play the game "Jogo da tabuada"-->
<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <link rel="sortcut icon" type="image/x-icon" href="_images/icone.ico" />
    <title>Jogo da Divisão!</title>

    <style>
        body {
            background: url("_images/painter-3177366.png");
            background-repeat: no-repeat;
            background-size: 1400px 800px;
        }
    </style>



</head>

<body>
    <div id="interface">
        <center>
            <h1>Jogo da Divisão!</h1>
            <div id="content-divisao">
                <p><span class="special-word4">Bem vindo</span> ao <span class="special-word2">Jogo da Divisão</span><span class="special-word">!</span><br />
                    <span class="special-word3">Descobre</span> como <span>funciona</span> uma <span class="special-word">operação de divisão</span><span class="special-word4">.</span>
                </p>

                <form method="get" action="">
                    <table>
                        <tr>
                            <th>Dividendo<br />&darr;</th>
                            <th>Divisor<br />&darr;</th>
                            <th>Quociente<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&darr;</th>
                        </tr>
                        <tr>
                            <td><input type="number" name="dividendo" /> : </td>
                            <td><input type="number" name="divisor" /></td>
                            <td>= &nbsp;&nbsp;?</td>
                        <tr>
                    </table>
                    <input class="button-play" type="submit" value="JOGA!" />
                </form>
            </div>
        </center>
    </div>

</body>

</html>