<?php

//cookie do tamanho
    if (isset($_POST['tamanhoFonte'])) {
        $fonte = $_POST['tamanhoFonte'];

        setcookie('cookie_fonte', $fonte, time() + 10);
    } else {
        if (isset($_COOKIE['cookie_fonte'])) {
            $fonte = $_COOKIE['cookie_fonte'];
        } else {
            $fonte = 20;
        }
    }

//cookie da cor
    if (isset($_POST['corFonte'])) {
        $cor = $_POST['corFonte'];

        setcookie('cookie_cor', $cor, time() + 10);
    } else {
        if (isset($_COOKIE['cookie_cor'])) {
            $cor = $_COOKIE['cookie_cor'];
        } else {
            $cor = 'black';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

        <h3>preferências:</h3>

        <label>Tamanho da fonte:</label>
        <select name="tamanhoFonte" id="tamanhoFonte">

            <option value="20" <?php if($fonte == 20) echo 'selected'?>>Pequena</option>
            <option value="30" <?php if($fonte == 30) echo 'selected'?>>Média</option>
            <option value="50" <?php if($fonte == 40) echo 'selected'?>>Grande</option>

        </select>    

        <br/>

        <label>Cor da fonte:</label>
        <select name="corFonte" id="corFonte">

            <option value="black"   <?php if($cor == 'black') echo 'selected'?>>Preto</option>
            <option value="red"     <?php if($cor == 'red') echo 'selected'?>>Vermelho</option>
            <option value="blue"    <?php if($cor == 'blue') echo 'selected'?>>Azul</option>

        </select>

        <br/>

        <input type="submit">

        <hr />

        <div class="texto" style="font-size: <?php echo $fonte; ?>px; color: <?php echo $cor?>;">

            <p>O Rock in Rio é um dos maiores e mais famosos festivais de música do mundo, criado em 1985 no Brasil. Idealizado por Roberto Medina, o evento tem como objetivo reunir grandes nomes da música nacional e internacional em um único palco, promovendo um ambiente de celebração da diversidade musical e cultural.</p>
            <p>A primeira edição do festival aconteceu no Rio de Janeiro e contou com a participação de artistas como Queen, Rod Stewart, AC/DC, Yes, e outros grandes nomes da música. Desde então, o Rock in Rio passou a ser realizado periodicamente em diferentes edições ao redor do mundo, incluindo Lisboa, Madrid e Las Vegas, além de diversas edições no Brasil.</p>
            <p>O festival é conhecido não só por sua vasta programação musical, mas também por seu compromisso com questões sociais e ambientais. Ao longo dos anos, o evento se expandiu, criando palcos e espaços temáticos, como o Palco Mundo, onde tocam os principais artistas, e o Palco Sunset, dedicado a colaborações e apresentações de artistas emergentes ou de estilos alternativos.</p>
            <p>Com uma mistura de rock, pop, música eletrônica, hip hop e outros gêneros, o Rock in Rio se tornou uma vitrine para a música mundial e uma verdadeira celebração da cultura jovem, com grande impacto no cenário musical global. A edição de 2024 promete continuar a tradição de oferecer grandes espetáculos e experiências inesquecíveis para os fãs.</p>

        </div>

    </form>
</body>
</html>
