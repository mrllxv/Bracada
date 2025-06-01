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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <title>Atletas | Braçada final</title>
</head>

<body class="body">
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
    <!-- Estruturando o cabeçalho do site e a barra de navegação -->
    <header class="header header-athletes">
        <nav class="header__nav">
            <a href="/Bracada/views/index.php" class="nav__home-btn">
                <h1 class="nav__title">Braçada Final</h1>
            </a>
            <ul class="nav__list">
                <li class="nav__list-item nav__list-item--hover nav__list-item--focus">
                    <a href="/Bracada/pages/views/index.php" class="nav__list-link">Home</a>
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
            </ul>

            <div class="nav__container-buttons">
                <a href="../../actions/cadastroForm.php"
                    class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Cadastrar
                </a>
                <a href="../../actions/login.php" class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Entrar
                </a>
            </div>
        </nav>
    </header>

    <section class="athletes-search">
        <div class="athletes-search__container">
            <h2 class="athletes__title">Catálogo de atletas</h2>
            <input type="search" name="search_athlete" id="search_athlete" class=" athletes__input-search"
                placeholder="Digite o nome do atleta">

            <!-- <select name="" id="country_" class="athletes__filters">
                <option value="none">Escolha um País</option>
                <option value="country">País</option>
            </select>

            <select name="" id="country_" class="athletes__filters">
                <option value="none">Escolha uma modalidade</option>
                <option value="modality">modalidade</option>
            </select> -->

        </div>
    </section>

    <hr class="divider">

    <main class="main">
        <section class="athletes">
            <a href="" class="athlete-card__container">
                <article class="athlete-card">
                    <figure class="athlete-card__profile">
                        <img src="./Micheal_Phelps.webp" alt="" class="athlete-card__image">
                    </figure>

                    <h2 class="athlete-card__name">Michael Phelps</h2>
                    <p class="athlete-card__birthday">27/09/1970</p>
                    <p class="athlete-card__modality"></p>
                </article>
            </a>

            <a href="" class="athlete-card__container">
                <article class="athlete-card">

                    <figure class="athlete-card__profile">
                        <img src="./Micheal_Phelps.webp" alt="" class="athlete-card__image">
                    </figure>

                    <h2 class="athlete-card__name">Michael Phelps</h2>
                    <p class="athlete-card__birthday">27/09/1970</p>
                    <p class="athlete-card__modality"></p>
                </article>
            </a>
        </section>
    </main>

    <div class="arrow-up hidden">
        <img src="../../icons/arrow.svg" alt="">
    </div>

    <footer class="footer" id="footer">
        <p class="footer__infos">
            2025 - Projeto Braçada Final -
            <a href="https://github.com/mrllxv/BracadaFinal" target="_blank" class="footer__infos-github">Github</a>
        <p class="footer__infos-advice">Este projeto é apenas para cunho educativo e totalmente baseado no site oficial
            dos
            <a href="https://www.olympics.com/pt/" class="footer__infos-reference">Jogos Olímpicos</a>.
            Todos os direitos e informações são reservados a eles
        </p>
        </p>
    </footer>

    <script src="./scripts/getAthletes.js"></script>


</body>

</html>