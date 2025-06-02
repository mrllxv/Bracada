<?php
require_once '../../actions/verifica_login.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />

        <!-- <style>
            .athlete-medals {
    padding: 2rem;
  }

  .athlete-medals__title {
    text-align: center;
  }

  .athlete-medals__table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
  }

  .athlete-medals__header,
  .athlete-medals__cell {
    border: 1px solid #ccc;
    padding: 0.75rem;
    text-align: center;
  }

  .athlete-medals__header--gold {
    background-color: gold;
  }

  .athlete-medals__header--silver {
    background-color: silver;
  }

  .athlete-medals__header--bronze {
    background-color: #cd7f32;
  }
        </style> -->

    <title>Perfil do Atleta | Nome</title>
</head>

<body class="body-athlete">
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
    <header class="header header-athlete">
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
            </ul>

            <div class="nav__container-buttons">
                <a href="/Bracada/views/cadastroForm.php" class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Cadastrar
                </a>
                <a href="/Bracada/views/loginForm.php" class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Entrar
                </a>
            </div>
        </nav>
    </header>

    
    <main class="main-athlete" id="main">
        <div class="athlete-container">
            <section class="athlete-presentation">
                <h2 class="athlete-presentation__name">
                    <!-- Simone Biles -->
                </h2>
                <div class="athlete-presentation__infos">
                    <p class="athlete-presentation__infos-country">
                        <span class="athlete-presentation__country"></span>
                        <!-- Estados Unidos da América -->
                    </p>
                    <p class="athlete-presentation__infos-modality">
                        <!-- Ginástica Artística -->
                    </p>
                </div>
            </section>
            
            <section class="athlete-biography">
                <h2 class="athlete-biography__title">
                    <!-- Biografia do Atleta -->
                </h2>
                <p class="athlete-biography__content">
                    <!-- Nascida em Columbus, Ohio, em 14 de março de 1997, Simone Biles começou sua odisseia na ginástica com
                    apenas seis anos de idade e sua trajetória estava destinada à grandeza desde o início.
                    Muito jovem para se classificar para os Jogos Olímpicos de Londres em 2012, Biles alcançou a fama em
                    2013. Com apenas 16 anos, ela conquistou duas medalhas de ouro no Campeonato da Antuérpia, incluindo o
                    cobiçado título geral. Nesse campeonato, ela apresentou ao mundo um movimento inovador no solo - o
                    Biles, um duplo mortal com meia torção, que agora está consolidado na história da ginástica.
                    Com quatro ouros no Campeonato Mundial em 2014 e outros quatro em 2015, a jovem já era uma potência
                    formidável rumo aos seus primeiros Jogos Olímpicos no Rio 2016. Biles não deixou margem para dúvidas,
                    garantindo o ouro nas provas de solo, equipe, salto e all-around, além de conquistar o bronze na trave
                    de equilíbrio. -->
                </p>
            </section>
            <section class="athlete-medals">
                <h2 class="athlete-medals__title">
                    Medalhas do Atleta
                </h2>
                <div class="athlete-medals__container">
                    <table class="athlete-medals__table">
                        <thead class="athlete-medals__thead">
                            <tr class="athlete-medals__row">
                                <th class="athlete-medals__header">Categoria</th>
                                <th class="athlete-medals__header athlete-medals__header--gold">Ouro</th>
                                <th class="athlete-medals__header athlete-medals__header--silver">Prata</th>
                                <th class="athlete-medals__header athlete-medals__header--bronze">Bronze</th>
                                <!-- <th class="athlete-medals__header">Total</th> -->
                            </tr>
                        </thead>
                        <tbody class="athlete-medals__body">
                            <tr class="athlete-medals__row">
            
                                <td class="athlete-medals__cell"></td>
                                <td class="athlete-medals__cell">5</td>
                                <td class="athlete-medals__cell">3</td>
                                <td class="athlete-medals__cell">2</td>
                                <!-- <td class="athlete-medals__cell">10</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </main>

    <!-- <div class="arrow-up hidden">
        <img src="../../icons/arrow.svg" alt="">
    </div> -->

    <footer class="footer" id="footer">
        <p class="footer__infos">
            2025 - Projeto Braçada Final -
            <a href="https://github.com/mrllxv/Bracada" target="_blank" class="footer__infos-github footer__link">Github</a>
        <p class="footer__infos-advice">Este projeto é apenas para cunho educativo e totalmente baseado no site oficial
            dos
            <a href="https://www.olympics.com/pt/" target="_blank" class="footer__infos-reference footer__link">Jogos Olímpicos</a>.
            Todos os direitos e informações são reservados a eles.
        </p>
        </p>
    </footer>

    <script src="./scripts/getAthleteProfile.js"></script>
</body>

</html>