<?php
require_once '../../actions/verifica_login.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="../../styles/global.css" />
    <link rel="stylesheet" href="./medals.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <title>Medalha | Braçada final</title>

    <style>


    </style>
</head>

<body class="body-medals">
    <!-- Para nomeção de classes aqui no html, estamos utlizando a convenção  de nomenclatura BEM css para facilitar na organização do codigo e na especificidade do CSS -->

    <!-- BEM é um acrônimo para Block, Element e Modifier onde
      Block é uma entidade autônoma que é significativa por si só. 
      Exemplo -> header, container, menu, checkbox,input

      Element é uma parte de um bloco que não tem significado independente e está semanticamente vinculada ao seu bloco, como se fosse um elemento-filho
      Exemplo -> menu item, list item, checkbox caption, header title

      Modifier é uma flag em um bloco ou elemento que são usadas para referneciar alterações do comportamento da entidade.
      Exemplo -> disabled, highlighted, checked, fixed, size big,color yellow
    -->

    <!-- Syntax
      uma classe CSS composta de Nome do Bloco + 2 underlines + nome do Elemento: .[Bloco]__[Elemento].
      Exemplo -> header__home-btn (onde o header é o bloco e o elemento é o home-btn)

      caso o block ou elemento tiver um modifier, a escrita da classe é composta pelo 
      nome de um Bloco ou Modificador + 2 hífens + o nome do Modificador: [Bloco|Elemento]--[Modificador].
      Exemplo -> nav__buttons--hover (O bloco é nav, buttons é o elemento e o modificador de buttons é o hover)


      Para mais informações e sanar as dúvidas, consultar as documentações abaixo:
      https://desenvolvimentoparaweb.com/css/bem/
      https://getbem.com/introduction/
    -->

    <!-- Estruturando o cabeçalho do site e a barra de navegação -->

    <header class="header header-medals">
        <nav class="header__nav">
            <a href="/Bracada/views/index.php" class="nav__home-btn">
                <h1 class="nav__title">Braçada Final</h1>
            </a>
            <ul class="nav__list">
                <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="/Bracada/views/index.php" class="nav__list-link">Home</a>
                </li>
                <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="/Bracada/pages/athletes/athletes.php" class="nav__list-link">Atletas</a>
                </li>
                <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="/Bracada/pages/medals/medals.php" class="nav__list-link">Medalhas</a>
                </li>
                <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="/Bracada/pages/gallery/gallery.php" class="nav__list-link">Galeria</a>
                </li>
                <!-- <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="#" class="nav__list-link">Quiz</a>
                </li> -->
            </ul>

            <div class="nav__container-buttons">
                <a href="cadastroForm.php" class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Cadastrar
                </a>
                <a href="loginForm.php" class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Entrar
                </a>
            </div>
        </nav>
    </header>

    <!-- Estruturando o html para o banner da página (obs: a imagem do banner será colocada via estilização no css) -->

    <section class="banner-medals">
        <div class="banner__infos-container">
            <h2 class="banner__infos-title">Os Maiores medalhistas</h2>
            <p class="banner__infos-copy">
                <strong class="white">Eles quebraram recordes, desafiaram limites e eternizaram seus nomes na história
                    do esporte! </strong>
                <br>

                Entre nesta jornada épica e descubra os atletas que se destacaram nos Jogos Olímpicos, conquistando
                medalhas que definiram suas carreiras e transformaram suas vidas.
            </p>
        </div>
    </section>

    <main id="main">
        <section class="athlete-medals medals">
            <h2 class="athlete-medals__title">
                Quadro de medalhas
            </h2>
            <div class="athlete-medals__container">
                <table class="athlete-medals__table">
                    <thead class="athlete-medals__thead">
                        <tr class="athlete-medals__row">
                            <th class="athlete-medals__header athlete-medals__header-country">País</th>
                            <th class="athlete-medals__header athlete-medals__header-name">Nome</th>
                            <th class="athlete-medals__header athlete-medals__header--gold">Ouro</th>
                            <th class="athlete-medals__header athlete-medals__header--silver">Prata</th>
                            <th class="athlete-medals__header athlete-medals__header--bronze">Bronze</th>
                            <th class="athlete-medals__header athlete-medals__header-total">Total</th>
                        </tr>
                    </thead>
                    <tbody class="athlete-medals__body">
                        <tr class="athlete-medals__row">

                            <td class="athlete-medals__cell athlete-medals__cell-country"></td>
                            <td class="athlete-medals__cell athlete-medals__cell-name"></td>
                            <td class="athlete-medals__cell athlete-medals__cell-gold"></td>
                            <td class="athlete-medals__cell athlete-medals__cell-silver"></td>
                            <td class="athlete-medals__cell athlete-medals__cell-bronze"></td>
                            <td class="athlete-medals__cell athlete-medals__cell-total"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="footer" id="footer">
        <p class="footer__infos">
            2025 - Projeto Braçada Final -
            <a href="https://github.com/mrllxv/Bracada" target="_blank"
                class="footer__infos-github footer__link">Github</a>
        <p class="footer__infos-advice">Este projeto é apenas para cunho educativo e totalmente baseado no site oficial
            dos
            <a href="https://www.olympics.com/pt/" target="_blank" class="footer__infos-reference footer__link">Jogos
                Olímpicos</a>.
            Todos os direitos e informações são reservados a eles
        </p>
        </p>
    </footer>

</body>

</html>