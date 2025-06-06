<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <title>Home | Braçada final</title>


</head>

<body class="body-home">
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
    <header class="header header-home">
        <nav class="header__nav">
            <a href="../../views/index.php" class="nav__home-btn">
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
                <a href="/Bracada/views/cadastroForm.php"
                    class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Cadastrar
                </a>
                <a href="/Bracada/views/loginForm.php"
                    class="button nav__buttons nav__buttons--hover nav__buttons--focus">
                    Entrar
                </a>
            </div>
        </nav>
    </header>

    <!-- Estruturando o html para o banner da página (obs: a imagem do banner será colocada via estilização no css) -->

    <section class="banner" id="banner">
        <div class="banner__infos-container">
            <h2 class="banner__infos-title">Esporte Olímpico Natação</h2>
            <p class="banner__infos-copy">
                Conheça em primeira mão a história, os principais atletas e os
                melhores momentos do esporte queridinho das olimpíadas.
            </p>
            <p class="banner__infos-copy">Venha viver a mágia da natação conosco</p>

            <a href="#main"
                class="button banner__infos-button banner__infos-button--hover banner__infos-button--focus">Mais
                informações</a>
        </div>
    </section>

    <!-- Estruturando o conteúdo principal da página -->

    <main id="main">
        <div class="swimming-container">
            <!-- Seção com conteúdo que descreve com um breve resumo sobre o que é a natação para os jogos olimpicos -->
            <section class="swimming-definition swimming-section">
                <h2 class="swimming-definition__title title-section">
                    O que é a Natação nos Jogos Olimpícos?
                </h2>
                <p class="swimming-definition__content paragraph">
                    A natação nos Jogos Olímpicos é um esporte individual e coletivo em
                    que os competidores impulsionam seus corpos através da água em uma
                    piscina externa ou interna usando um dos seguintes estilos: estilo
                    livre, costas, peito ou borboleta.
                </p>
            </section>

            <!-- Seção que contem um conteúdo explicativo contando sobre as principais modalidades da natação -->

            <section class="swimming-modality swimming-section">
                <h2 class="swimming-modality__title title-section">
                    As modalidades da natação
                </h2>
                <div class="swimming-modality__genre-container">
                    <p class="swimming-modality__genre-content paragraph paragraph-reverse">
                        Os nadadores profissionais normalmente competem em uma piscina de
                        “pista longa” de 50m ou em uma piscina de “pista curta” de 25m.
                        Existem apenas eventos de percurso longo nos Jogos Olímpicos. Os
                        quatro estilos que podem ser usados durante as provas são:
                    <ul class="swimming-modality__genre-list">
                        <li class="swimming-modality__genre-listitem">Estilo livre</li>
                        <li class="swimming-modality__genre-listitem">Costas</li>
                        <li class="swimming-modality__genre-listitem">Peito</li>
                        <li class="swimming-modality__genre-listitem">Borboleta</li>
                    </ul>

                    <strong>
                        <span class="important">*</span>
                        A maratona aquática é uma
                        disciplina olímpica separada, onde os atletas competem longas
                        distâncias em águas abertas (por exemplo, rios, lagos e mar)
                        usando apenas estilo livre.
                    </strong>
                    </p>
                </div>
            </section>

            <!-- Seção com o conteúdo que conta um pouco sobre as principais regras oo esporte nas olimpíadas -->

            <section class="swimming-rules swimming-section">
                <h2 class="swimming-rules__title title-section">
                    Quais são as principais regras da natação?
                </h2>
                <p class="swimming-rules__content paragraph paragraph-reverse">
                    Os atletas nadam um dos quatro estilos - livre, costas, peito e
                    borboleta - ou todos eles nas provas de medley individual (MI). Para
                    eventos de estilo livre, peito, borboleta e MI, os nadadores começam
                    mergulhando na água de uma plataforma de largada elevada, enquanto
                    os nadadores de costas (que também iniciam os revezamentos medley)
                    começam na água segurando o bloco de largada.
                    <br>
                    Nas provas de
                    revezamento, o segundo, terceiro e o quarto nadador de uma equipe só
                    podem largar do bloco quando o nadador anterior tocar a parede.
                    <br>
                    Em todas as provas, os nadadores largam simultaneamente ao som de um
                    sinal, e o primeiro indivíduo a tocar a parede da piscina após a
                    distância estabelecida é o vencedor. Qualquer nadador que mergulhar
                    na piscina antes do sinal de largada é desclassificado da prova.
                </p>
            </section>

            <!-- Seção de conteúdo que apresenta algumas curiosidades da natação nos jogos olimpicos -->
            <section class="swimming-curiosities swimming-section">
                <h2 class="swimming-curiosities__title title-section">Curiosidades na Natação nos Jogos Olímpicos</h2>
                <ol class="swimming-curiosities__list">
                    <li class="swimming-curiosities__list-item">
                        A natação é um dos esportes olímpicos mais antigos, tendo participado de todos os Jogos
                        Olímpicos modernos desde Atenas 1896. As mulheres começaram a competir na edição de Estocolmo
                        1912, e os revezamentos medley mistos fizeram sua estreia olímpica em Tóquio 2020.
                    </li>
                    <li class="swimming-curiosities__list-item">
                        A prova individual mais curta nos Jogos Olímpicos é o estilo livre 50m, enquanto a prova mais
                        curta do nado costas, peito e borboleta é de 100m.
                    </li>
                    <li class="swimming-curiosities__list-item">
                        Os Estados Unidos são a nação mais condecorada com 257 medalhas de ouro no geral depois de
                        Tóquio 2020, confortavelmente à frente da segunda colocada Austrália com 69.
                    </li>
                    <li class="swimming-curiosities__list-item">
                        O nadador olímpico masculino mais condecorado de todos os tempos é o americano Michael Phelps,
                        que, com 23 medalhas de ouro (incluindo 13 títulos individuais) e 28 medalhas no total, também é
                        o atleta olímpico mais condecorado de todos os tempos em qualquer esporte.
                    </li>
                    <li class="swimming-curiosities__list-item">
                        Sua compatriota Katie Ledecky é a nadadora olímpica individual mais condecorada de todos os
                        tempos, com sete medalhas de ouro (incluindo seis títulos individuais) e 10 no geral.
                    </li>
                    <li class="swimming-curiosities__list-item">
                        Depois do atletismo, a natação é o segundo maior esporte nos Jogos Olímpicos de Paris 2024 em
                        termos de eventos disputados por medalhas com 35 no total.
                    </li>
                </ol>
            </section>
        </div>
    </main>

    <div class="arrow-up hidden">
        <img src="../../icons/arrow.svg" alt="">
    </div>

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