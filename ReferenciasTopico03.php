<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->

        <div class="main-content container-fluid">
            <div class="page-title">

                <h3 class="font-bold">Referências Tópico 03</h3>
                <hr>

                <ul style="list-style: none;">
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        CEARÁ GLOBAL. Gamifica, 2020. Disponível em: <a href="https://cearaglobal.gamifica.ai/entrar" target="_blank"> https://cearaglobal.gamifica.ai/entrar</a>.
                    </li>
                    <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        DOCUSIGN. DOCUSIGN, 2020. Site de realizar acordos. Disponível em: <a href="https://www.docusign.com.br" target="_blank">
                            https://www.docusign.com.br </a>
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        CLICKSIGN. Fluxia, 2020. Assinatura eletrônica com validade jurídica. Disponível em: <a href="https://www.clicksign.com" target="_blank">https://www.clicksign.com</a>
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        MARTIN, VANESSA; LISBOA, Robson. Eventos Digitais, Híbridos & Virtuais. Disponível em: <a href="https://mcusercontent.com/a5418613c861eb393090f66ab/files/49415bce-18d4-4bd0-b8a4-7d7caf9ca4fe/Ebook_Eventos_hibridos_e_virtuais_2020_vfinal_1_.pdf" target="_blank"> https://mcusercontent.com/a5418613c861eb393090f66ab/files/49415bce-18d4-4bd0-b8a4-7d7caf9ca4fe/Ebook_Eventos_hibridos_e_virtuais_2020_vfinal_1_.pdf</a>.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        NGIZZA, Carolina. 43 eventos online para empreendedores que acontecem em maio. exame., São Paulo, 06 de maio de 2020. PME. Disponível em: <a href="https://exame.com/pme/43-eventos-online-para-empreendedores-que-acontecem-em-maio" target="_blank"> https://exame.com/pme/43-eventos-online-para-empreendedores-que-acontecem-em-maio</a>.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        APRESENTE vídeo e áudio de alta qualidade no Google Meet. G Suit Updates, 2020. Disponível em: <a href="https://gsuiteupdates-pt.googleblog.com/2020/04/apresente-video-e-audio-de-alta.htm" target="_blank"> https://gsuiteupdates-pt.googleblog.com/2020/04/apresente-video-e-audio-de-alta.htm </a>
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        COMO realizar uma conferência grande com zoom: 5 práticas recomendadas para negócios, igreja, etc. 0x notícias blockchain, 2020. Disponível em: <a href="https://pt.0xzx.com/2020040294665.html" target="_blank"> https://pt.0xzx.com/2020040294665.html</a>
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        SYMPLA. Sympla, 2020. Plataforma própria para eventos. Disponível em: <a href="https://www.sympla.com.br/eventos/online" target="_blank"> https://www.sympla.com.br/eventos/online</a>.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        LAYMAN, Madison. Virtual Events in 2020: The Ultimate Guide. cvent, 2020. Disponível em: <a href="https://www.cvent.com/en/blog/events/virtual-events" target="_blank"> https://www.cvent.com/en/blog/events/virtual-events</a>.
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        Gerrit Heijkoop. YouTube, 2020. How to Organize Engaging Hybrid Events. Disponível em: <a href="https://youtu.be/1cqj0ruaaXY" target="_blank"> https://youtu.be/1cqj0ruaaXY
                        </a>
                    </li> <br>
                    <li>
                        <i class="fa fa-book fa-lg CorLaranja" aria-hidden="true"></i>
                        VANNESTE, Maarten. Multi-Hub Meeting: when groups meets groups. Belgium: 2018, Meeting Support Institute.
                    </li> <br>
                    <br><br>

                </ul>

                <div class="text-center">
                    <a href="Topico03.php" type="button" class="btn btn-outline-success btn-sm">Página anterior</a>
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
                </div>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>