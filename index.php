<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Korban</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="IMG/favicon-korban.png">
    <link rel="stylesheet" href="CSS/estilo.css" media="screen" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>

    <!--INICIO MENU SUPERIOR-->
    <nav class="menu" id="topo-home">

        <div class="menu-logo">
            <img src="./IMG/logo-korban2.png" alt="Logo">
        </div>

        <ul class="menu-principal">
            <li><a href="#area-empresa" id="menu-sobre">Sobre</a></li>
            <li><a href="#sites" id="menu-servico">Criação de Sites</a></li>
            <li><a href="#contato" id="menu-orcamento">Orçamento</a></li>
            <li><a href="#contato" id="menu-contato">Contato</a></li>
        </ul>

        <div class="menu-contato">
            <p class="item-telefone"><strong>&#9990</strong> (34) 9 9155-9881</p>
            <p class="item-contato"><strong>&#x00040</strong> contato@korbansolucoes.com.br</p>
        </div>

    </nav>
    <!--FIM MENU SUPERIOR-->

    <!--INICIO BANNER PRINCIPAL-->
    <div class="containner">
        <div id="imagem-banner-principal"></div>
        <div class="area-carousel">
            <div id="transp-1">
                <div id="textos-banner-principal">

                    <div id="plano-1">
                        <h1 id="titulo-1">Criação de Sites Profissionais!</h1><br>
                        <p id="subtitulo-1">
                            Design moderno <span style="color: #68BC03;">&#10004;</span><br>
                            Alta tecnologia <span style="color: #68BC03;">&#10004;</span><br>
                            Excelente performance <span style="color: #68BC03;">&#10004;</span>
                        </p><br>
                        <a href="#" id="botao-1">
                            <p id="btnOrcamento">Orçamento</p>
                        </a>
                    </div>

                    <div id="plano-2">
                        <h1 id="titulo-2">Sites com foco no visitante!</h1><br>
                        <p id="subtitulo-2">
                            Sites responsivos <span style="color: #68BC03;">&#10004;</span><br>
                            Adaptados a smartphones e tablets <span
                                style="color: #68BC03;">&#10004;</span><br>
                            De fácil navegação <span style="color: #68BC03;">&#10004;</span>
                        </p><br>
                        <a href="#" id="botao-2">
                            <p>Orçamento</p>
                        </a>
                    </div>

                    <div id="plano-3">
                        <h1 id="titulo-3">Projetos sob medida!</h1><br>
                        <p id="subtitulo-3">
                            Atinja os resultados que sua empresa precisa <span
                                style="color: #68BC03;">&#10004;</span><br>
                            Temos o melhor custo x benefício <span
                                style="color: #68BC03;">&#10004;</span><br>
                            Você vai se surpreender <span style="color: #68BC03;">&#10004;</span>
                        </p><br>
                        <a href="#" id="botao-3">
                            <p>Orçamento</p>
                        </a>
                    </div>

                </div>

                <div class="seletores">
                    <input onclick="selectText('1', '2', '3')" type="radio" name="seletor"
                        id="seletor1">
                    <input onclick="selectText('2', '3', '1')" type="radio" name="seletor"
                        id="seletor2">
                    <input onclick="selectText('3', '1', '2')" type="radio" name="seletor"
                        id="seletor3">
                </div>

            </div>

        </div>
    </div>
    <!--FIM BANNER PRINCIPAL-->

    <!--INICIO DO MINI BANNER 2-->
    <div id="container-mb-2">

        <div id="carousel-mb-2">
            <div id="area-box-mb-2">
                <div id="mini-banner-2">
                    <div class="box2-fundo-branco">
                        <div class="textos-mb-2">
                            <svg class="icone-gde" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="#24707a"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-upload-cloud">
                                <polyline points="16 16 12 12 8 16"></polyline>
                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                <polyline points="16 16 12 12 8 16"></polyline>
                            </svg>
                            <h3>INOVAÇÃO</h3>
                        </div>
                    </div>
                </div>
                <div id="mini-banner-2">
                    <div class="box2-fundo-branco">
                        <div class="textos-mb-2">
                            <svg class="icone-gde" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="#24707a"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-cpu">
                                <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                <rect x="9" y="9" width="6" height="6"></rect>
                                <line x1="9" y1="1" x2="9" y2="4"></line>
                                <line x1="15" y1="1" x2="15" y2="4"></line>
                                <line x1="9" y1="20" x2="9" y2="23"></line>
                                <line x1="15" y1="20" x2="15" y2="23"></line>
                                <line x1="20" y1="9" x2="23" y2="9"></line>
                                <line x1="20" y1="14" x2="23" y2="14"></line>
                                <line x1="1" y1="9" x2="4" y2="9"></line>
                                <line x1="1" y1="14" x2="4" y2="14"></line>
                            </svg>
                            <h3>DESIGN MODERNO</h3>
                        </div>
                    </div>
                </div>
                <div id="mini-banner-2">
                    <div class="box2-fundo-branco">
                        <div class="textos-mb-2">
                            <svg class="icone-gde" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-globe">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                            <h3>ALTA TECNOLOGIA</h3>
                        </div>
                    </div>
                </div>
                <div id="mini-banner-2">
                    <div class="box2-fundo-branco">
                        <div class="textos-mb-2">
                            <svg class="icone-gde" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-hard-drive">
                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                <path
                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                </path>
                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                            </svg>
                            <h3>PROFISSIONALISMO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--INICIO BACKGROUND HOME-->
    <div class="container-bg-home">
        <div class="bg-home"></div>
        <div class="txt-bg-home">
            <h1><span style="color: #68BC03;">Planejamos e Construimos </span> para você um
                site<br>moderno e eficiente para alavancar seus negócios!</h1>
            <p></p>
            <a class="btn-bg-home" href="#">Venha Conferir</a>
        </div>
    </div>
    <!--FIM BACKGROUND HOME-->

    <!--INICIO DEPOIMENTOS HOME-->
    <div class="container-depoimentos-home">
        <div class="area-depoimentos-home">
            <div class="titulo-depoimento">
                <h1><span style="color: #3CB4C5;">SITE RESPONSIVO</span></h1>
                <p>Adaptável para computador, tablet e celular!</p>
            </div>
        </div>
    </div>

    <div class="container-depoimentos-home2">
        <div class="area-depoimentos-home2">
            <div class="titulo-depoimento2">
                <h1><span style="color: #1f915a;">DOMÍNIO PERSONALIZADO</span></h1>
                <p>Criamos um domínio personalizado para o seu negócio!</p>
            </div>
        </div>
    </div>

    <div class="container-depoimentos-home3">
        <div class="area-depoimentos-home3">
            <div class="titulo-depoimento3">
                <h1><span style="color: #7ca82a;">FORMULÁRIO DE CONTATO</span></h1>
                <p>Deixe o visitante do seu site encontrar você!</p>
            </div>
        </div>
    </div>

    <div class="container-depoimentos-home4">
        <div class="area-depoimentos-home4"></div>
        <div class="titulo-depoimento4" id="sites">
            <h1><span style="color: #2f8cb1;">SITES PROFISSIONAIS</span></h1>
            <p>Sites altamente profissionais com estrutura completa de <br>Home, Empresa, Serviços,
                Produtos e Contato!</p>
        </div>
    </div>
    <!--FIM DEPOIMENTOS HOME-->

    <!-- INICIO FORMULARIO -->

    <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>
    <form class="form-contact" id="contato" method="post" action="form.php">
        <h2><span style="color: #2f8cb1;">FORMULÁRIO PARA CONTATO</span></h2>

        <div class="form-group">

            <div class="form-dados">

                <div class="form-nome">
                    <label for="inputNome" class="form-label">Nome</label>
                    <div class="form-input">
                        <input class="input-form" type="text" name="f-nome" id="inputNome"
                            placeholder="seu nome">
                    </div>
                </div>

                <div class="form-email">
                    <label for="inputEmail" class="form-label">E-mail</label>
                    <div class="form-input">
                        <input class="input-form" type="email" name="f-email" id="inputEmail"
                            placeholder="seu melhor e-mail">
                    </div>
                </div>

                <div class="form-empresa">
                    <label for="inputEmpresa" class="form-label">Empresa</label>
                    <div class="form-input">
                        <input class="input-form" type="text" name="f-empresa" id="inputEmpresa"
                            placeholder="nome da sua empresa">
                    </div>
                </div>

                <div class="form-telefone">
                    <label for="inputTelefone" class="form-label">Telefone</label>
                    <div class="form-input">
                        <input class="input-form" type="tel" name="f-telefone" id="inputTelefone"
                            maxlength="15" placeholder="(99) 9 9999-9999 ou (34) 3333-3333"
                            required>
                    </div>
                </div>

                <div class="form-mensagem">
                    <label for="inputMensagem" class="form-label">Mensagem</label><br>
                    <textarea maxlength="230" id="textMensagem" name="textMensagem" rows="3"
                        cols="80"></textarea>
                </div>

            </div>

            <button class="btn-form" type="submit">Enviar</button>

        </div>
    </form>

    <!--FIM FORMULARIO-->

    <!-- INICIO EMPRESA -->

    <div id="area-empresa">
        <div class="bg-empresa"></div>
        <div class="area-txt-empresa">
            <h1>Sobre</h1>
            <p>A <span style="color: #2f8cb1; font-weight: bold;">Korban</span> nasceu com o
                objetivo de prover soluções tecnológicas para seus clientes, para que, por meio
                das nossas soluções, sua empresa estabeleça a credibilidade necessária para o
                seu negócio.</p>
        </div>
    </div>

    <!-- TERMINO EMPRESA -->

    <!--INICIO FOOTER-->
    <div class="footer">

        <div class="logo-footer">
            <img src="IMG/logo-korban3.png" alt="">
        </div>

        <div class="dados-cadastrais">
            <pre>&#9742; (34) 9 8851-9380    |    Uberlândia    |    MG</pre>
        </div>

        <div class="redes-sociais">
            <svg enable-background="new 0 0 128 128" height="128px" id="Layer_1" version="1.1"
                viewBox="0 0 128 128" width="128px" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <circle cx="64" cy="64" fill="#0076B4" r="64" />
                </g>
                <g>
                    <path
                        d="M44.119,95.934H29.184V47.93h14.935V95.934z M36.656,41.371c-4.792,0-8.656-3.876-8.656-8.653   c0-4.775,3.864-8.652,8.656-8.652c4.771,0,8.646,3.876,8.646,8.652C45.303,37.495,41.428,41.371,36.656,41.371z M100,95.934H85.081   V72.59c0-5.566-0.097-12.728-7.752-12.728c-7.765,0-8.948,6.065-8.948,12.33v23.742H53.479V47.93H67.78v6.562h0.204   c1.99-3.774,6.857-7.753,14.117-7.753c15.105,0,17.897,9.939,17.897,22.868L100,95.934L100,95.934z"
                        fill="#FFFFFF" />
                </g>
            </svg>

            <svg id="icon-instagram" style="enable-background:new 0 0 1000 1000;" version="1.1"
                viewBox="0 0 1000 1000" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <style type="text/css">
                    .st0 {
                        fill: url(#SVGID_1_);
                    }

                    .st1 {
                        fill: #FFFFFF;
                    }
                </style>
                <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="146.4465"
                    x2="853.5535" y1="853.5535" y2="146.4465">
                    <stop offset="0" style="stop-color:#FFD521" />
                    <stop offset="5.510481e-02" style="stop-color:#FFD020" />
                    <stop offset="0.1241" style="stop-color:#FEC01E" />
                    <stop offset="0.2004" style="stop-color:#FCA71B" />
                    <stop offset="0.2821" style="stop-color:#FA8316" />
                    <stop offset="0.3681" style="stop-color:#F85510" />
                    <stop offset="0.4563" style="stop-color:#F51E09" />
                    <stop offset="0.5" style="stop-color:#F30005" />
                    <stop offset="0.5035" style="stop-color:#F20007" />
                    <stop offset="0.5966" style="stop-color:#E1003B" />
                    <stop offset="0.6879" style="stop-color:#D30067" />
                    <stop offset="0.7757" style="stop-color:#C70088" />
                    <stop offset="0.8589" style="stop-color:#BF00A0" />
                    <stop offset="0.9357" style="stop-color:#BB00AF" />
                    <stop offset="1" style="stop-color:#B900B4" />
                </linearGradient>
                <path class="st0"
                    d="M500,1000L500,1000C223.9,1000,0,776.1,0,500v0C0,223.9,223.9,0,500,0h0c276.1,0,500,223.9,500,500v0  C1000,776.1,776.1,1000,500,1000z" />
                <g>
                    <path class="st1"
                        d="M500,220.2c91.1,0,101.9,0.3,137.9,2c33.3,1.5,51.4,7.1,63.4,11.8c15.9,6.2,27.3,13.6,39.2,25.5   c11.9,11.9,19.3,23.3,25.5,39.2c4.7,12,10.2,30.1,11.8,63.4c1.6,36,2,46.8,2,137.9s-0.3,101.9-2,137.9   c-1.5,33.3-7.1,51.4-11.8,63.4c-6.2,15.9-13.6,27.3-25.5,39.2c-11.9,11.9-23.3,19.3-39.2,25.5c-12,4.7-30.1,10.2-63.4,11.8   c-36,1.6-46.8,2-137.9,2s-101.9-0.3-137.9-2c-33.3-1.5-51.4-7.1-63.4-11.8c-15.9-6.2-27.3-13.6-39.2-25.5   c-11.9-11.9-19.3-23.3-25.5-39.2c-4.7-12-10.2-30.1-11.8-63.4c-1.6-36-2-46.8-2-137.9s0.3-101.9,2-137.9   c1.5-33.3,7.1-51.4,11.8-63.4c6.2-15.9,13.6-27.3,25.5-39.2c11.9-11.9,23.3-19.3,39.2-25.5c12-4.7,30.1-10.2,63.4-11.8   C398.1,220.5,408.9,220.2,500,220.2 M500,158.7c-92.7,0-104.3,0.4-140.7,2.1c-36.3,1.7-61.1,7.4-82.9,15.9   C254,185.3,234.9,197,216,216c-19,19-30.6,38-39.4,60.5c-8.4,21.7-14.2,46.5-15.9,82.9c-1.7,36.4-2.1,48-2.1,140.7   c0,92.7,0.4,104.3,2.1,140.7c1.7,36.3,7.4,61.1,15.9,82.9C185.3,746,197,765.1,216,784c19,19,38,30.6,60.5,39.4   c21.7,8.4,46.5,14.2,82.9,15.9c36.4,1.7,48,2.1,140.7,2.1s104.3-0.4,140.7-2.1c36.3-1.7,61.1-7.4,82.9-15.9   C746,814.7,765.1,803,784,784c19-19,30.6-38,39.4-60.5c8.4-21.7,14.2-46.5,15.9-82.9c1.7-36.4,2.1-48,2.1-140.7   s-0.4-104.3-2.1-140.7c-1.7-36.3-7.4-61.1-15.9-82.9C814.7,254,803,234.9,784,216c-19-19-38-30.6-60.5-39.4   c-21.7-8.4-46.5-14.2-82.9-15.9C604.3,159.1,592.7,158.7,500,158.7L500,158.7z" />
                    <path class="st1"
                        d="M500,324.7c-96.8,0-175.3,78.5-175.3,175.3S403.2,675.3,500,675.3S675.3,596.8,675.3,500   S596.8,324.7,500,324.7z M500,613.8c-62.8,0-113.8-50.9-113.8-113.8S437.2,386.2,500,386.2c62.8,0,113.8,50.9,113.8,113.8   S562.8,613.8,500,613.8z" />
                    <circle class="st1" cx="682.2" cy="317.8" r="41" />
                </g>
            </svg>

            <svg height="100%"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                version="1.1" viewBox="0 0 512 512" width="128px" xml:space="preserve"
                xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g>
                    <path
                        d="M512,256c0,-141.385 -114.615,-256 -256,-256c-141.385,0 -256,114.615 -256,256c0,127.777 93.616,233.685 216,252.89l0,-178.89l-65,0l0,-74l65,0l0,-56.4c0,-64.16 38.219,-99.6 96.695,-99.6c28.009,0 57.305,5 57.305,5l0,63l-32.281,0c-31.801,0 -41.719,19.733 -41.719,39.978l0,48.022l71,0l-11.35,74l-59.65,0l0,178.89c122.385,-19.205 216,-125.113 216,-252.89Z"
                        style="fill:#1877f2;fill-rule:nonzero;" />
                    <path
                        d="M355.65,330l11.35,-74l-71,0l0,-48.022c0,-20.245 9.917,-39.978 41.719,-39.978l32.281,0l0,-63c0,0 -29.297,-5 -57.305,-5c-58.476,0 -96.695,35.44 -96.695,99.6l0,56.4l-65,0l0,74l65,0l0,178.89c13.033,2.045 26.392,3.11 40,3.11c13.608,0 26.966,-1.065 40,-3.11l0,-178.89l59.65,0Z"
                        style="fill:#fff;fill-rule:nonzero;" />
                </g>
            </svg>

        </div>
    </div>
    <!--TERMINO FOOTER-->

    <!--INICIO ASSINATURA FOOTER-->
    <div class="ass-footer">
        <hr style="border-bottom: 0.1px solid rgb(15, 15, 15); " />
        <p>Desenvolvido por <span style="color: #2f8cb1;"><a
                    href="https://www.korbansolucoes.com.br">KORBAN SOLUÇÕES TECNOLÓGICAS</a></span>
        </p>
    </div>
    <!--TERMINO ASSINATURA FOOTER-->

    <!-- ICONE WHATSAPP-->
    <div id="whats-icon">

        <a href="https://web.whatsapp.com/send?phone=5534988519380" target="_blank">
            <img src="IMG/logo-whatsapp.png">
        </a>
    </div>

    <!-- BOTÃO VOLTAR-->
    <!-- <div id="voltar-topo">
        <a id="imgBtnTopo" href="#"><img src="IMG/botao-voltar.png"></a>
    </div> -->

    <script type="text/javascript" src="JS/korban.js"></script>

</body>

</html>