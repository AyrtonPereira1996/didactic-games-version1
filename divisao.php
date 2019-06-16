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

</head>

<body id="body-content-game">
    <div id="interface">
    <a href="main_page.php"><img class="img-link" src="./_images/icons8_Left_104px.png" /></a>
        
        <center>
        <h1 class="games-title" style="color: beige;">Jogo da Divisão!</h1>
            <div id="content-divisao">
                <p><span class="special-word">Bem vindo</span> ao <span class="special-word2">Jogo da Divisão</span><span class="special-word">!</span><br />
                    <span class="special-word3">Descobre</span> como <span>funciona</span> uma <span class="special-word">operação de divisão</span><span class="special-word4">.</span>
                </p>
              
                <form method="get" action="">
                   
                        <table>

                            <tr>
                                <th><span class="special-word2">Dividendo</span><br />&darr;</th>
                                <th></th>
                                <th><span class="special-word">Divisor</span><br />&darr;</th>
                                <th><span class="special-word3">&nbsp;&nbsp;Quociente </span><br />&nbsp;&nbsp;&nbsp;&darr;</th>
                            </tr>
                            <tr>
                                <td style="margin-right:20%;"><input type="number" name="dividendo" /></td>
                                <td class="table-line"> : </td>
                                <td class="table-line"><input type="number" name="divisor" /></td>
                                <td> = <span style="font-size:30pt;" class="special-word3"> ? </span></td>
                            </tr>

                        </table>
                   
                    <input style="margin-left:2%;" class="button-play" type="submit" value="JOGA!" />
                </form>
                
            </div>
        </center>
        <a class="imgAdress-item" target="_blank" href="https://pixabay.com/users/stux-12364/">&rarr; Imagem de Stux<a>
    </div>

</body>

</html>