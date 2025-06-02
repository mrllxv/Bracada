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
    <link rel="stylesheet" href="gallery.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oxygen:wght@300;400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <title>Home | Braçada final</title>
</head>

<body class="body body-gallery">
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
    <header class="header header-gallery">
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

    <section class="intro-gallery">
        <div class="intro-gallery__container">
            <h2 class="intro-gallery__title">Reviva Grandes Momentos Olímpicos</h2>
            <p class="intro-gallery__text">
                A cada braçada, salto ou chegada, um instante é eternizado. Nesta galeria, você encontrará registros visuais que celebram a emoção, a superação e a glória dos esportes olímpicos. De atletas consagrados a momentos inesquecíveis, mergulhe nas imagens que contam as histórias que moldaram o espírito olímpico.
            </p>
        </div>
    </section>
    

    <main class="main">
        <!-- Modal de imagem -->
        <div class="modal hidden" id="imageModal">
            <div class="modal__overlay" id="modalOverlay"></div>
            <div class="modal__content">
                <button class="modal__close" id="closeModal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <img src="" alt="Imagem ampliada" class="modal__image" id="modalImage">
            </div>
        </div>

        <section class="banner-gallery">
            <div class="gallery__container">
                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/Australia/Ariarne Titmus.jpg" alt="Ariarne Titmus" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/Australia/Ariarne Titmus.jpg">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Titmus conquistou ouro nos 200 m e 400 m livre em Tóquio 2020, prata nos 800 m e bronze no 4×100 m livre. Em 2023, venceu os 400 m no Mundial de Fukuoka com recorde mundial, foi prata nos 200 m, bronze nos 800 m e ouro no 4×200 m com novo recorde. Em Paris 2024, voltou a vencer os 400 m livre, reafirmando seu domínio.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="galleryAssets/Australia/Kaylee McKeown.webp" alt="Kaylee McKeown" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="galleryAssets/Australia/Kaylee McKeown.webp"">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">McKeown brilhou em Tóquio 2020 com 3 ouros e 1 bronze. Em 2022, somou 2 ouros, 3 pratas e 1 bronze em Budapeste e Melbourne. Em 2023, venceu os 50, 100 e 200 m costas no Mundial de Fukuoka. Em Paris 2024, foi ouro nos 100 m costas com recorde olímpico.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/Brasil/ana-marcela-cunha-683d01c09d281.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/Brasil/ana-marcela-cunha-683d01c09d281.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Ana Marcela Cunha, nadadora brasileira e campeã olímpica em Tóquio 2020, é uma das maiores maratonistas aquáticas da história. Venceu seis vezes o prêmio de melhor do mundo e tem 14 medalhas em mundiais, sendo 7 ouros. Também é referência LGBTQIA+ no esporte.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/Brasil/fernando-scheffer-683d01c0cca88.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/Brasil/fernando-scheffer-683d01c0cca88.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Fernando Scheffer é um nadador brasileiro, bronze nos 200 m livres em Tóquio 2020. Destaque desde 2018, quebrou vários recordes sul-americanos e foi ouro no Mundial de 2018 no 4×200 m livre com recorde mundial. Brilhou também nos Jogos Pan-Americanos.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/Canada/summer-mcintosh-683d01cc01fd9.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/Canada/summer-mcintosh-683d01cc01fd9.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>

                    <p class="gallery__card-description">Summer McIntosh, nadadora canadense, é tricampeã olímpica e tetracampeã mundial. Aos 14 anos foi destaque em Tóquio 2020. Quebrou dois recordes mundiais em 2023 e é campeã em estilos livre, borboleta e medley, sendo considerada fenômeno da natação.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/Canada/penny-oleksiak-683d01cbd9027.jpg" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/Canada/penny-oleksiak-683d01cbd9027.jpg">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Penny Oleksiak, nadadora canadense, começou aos 9 anos. Nos Jogos Rio 2016, foi a primeira canadense a conquistar 4 medalhas: ouro nos 100m livre, prata nos 100m borboleta e bronze nos revezamentos 4x100m e 4x200m livre. É uma das maiores estrelas da natação mundial..</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/China/qin-haiyang-683d01d20de8c.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/China/qin-haiyang-683d01d20de8c.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Qin Haiyang e um nadador chines especializado em peito e medley. Nos Jogos Tokio 2020 foi desclassificado nos 200m peito. No Mundial de 2023 em Fukouka, ganhou tres ouros nos 50m, 100m peito e revezamento 4x100m medley misto, e detem o recorde asiatico dos 50m peito.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/China/zhang-yufei-683d01d361c6f.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/China/zhang-yufei-683d01d361c6f.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Zhang Yufei e nadadora chinesa especialista em livre e borboleta. Detem recorde mundial junior nos 200m borboleta e tem 7 medalhas em eventos internacionais. Em Rio 2016 competiu e em Tóquio 2020 ganhou ouro nos 200m borboleta com recorde olimpico.</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/EUA/Caeleb Dressel.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/EUA/Caeleb Dressel.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Dressel competiu nos Jogos Olímpicos de 2016, conquistando a medalha de ouro nos 4x100 m medley e 4x100 m livre. Ganhou cinco ouros em Tóquio 2020, os quais foram obtidos nas provas quatro por cem metros livre, quatro por cem metros medley, cem metros livre, cem metros borboleta e cinquenta metros livre..</p>
                </article>

                <article class="gallery__card">
                    <div class="gallery__card-thumbnail">
                        <img src="../gallery/galleryAssets/EUA/Micheal_Phelps.webp" alt="Medalhas olímpicas" class="gallery__card-image">
                        <button class="gallery__card-button--expand" data-image="../gallery/galleryAssets/EUA/Micheal_Phelps.webp">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                    </div>
                    <p class="gallery__card-description">Michael Phelps e ex-nadador dos EUA, maior medalhista olimpico com 23 ouros. Em Pequim 2008, ganhou 8 ouros em uma edicao. Em Londres 2012, bateu recorde de medalhas totais com 19. Voltou em 2016 e quebrou recordes de idade e ouros em revezamentos.</p>
                </article>
            
                
            </div>
            
        </section>
    </main>

    <div class="arrow-up hidden">
        <img src="../../icons/arrow.svg" alt="">
    </div>

    <footer class="footer" id="footer">
        <p class="footer__infos">
            2025 - Projeto Braçada Final -
            <a href="https://github.com/mrllxv/Bracada" target="_blank" class="footer__infos-github footer__link">Github</a>
        <p class="footer__infos-advice">Este projeto é apenas para cunho educativo e totalmente baseado no site oficial
            dos
            <a href="https://www.olympics.com/pt/" target="_blank" class="footer__infos-reference footer__link">Jogos Olímpicos</a>.
            Todos os direitos e informações são reservados a eles
        </p>
        </p>
    </footer>

    <script src="./scripts/gallery.js"></script>
</body>

</html>