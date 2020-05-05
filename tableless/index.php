<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPNEWS</title>
    <!--CSS Manual-->
    <link href="style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <div id="box">

        <div id="header">
            <div id="header_logo">
               <a href="index.php" title="UpNews"><img src="imagens/upnews.png" alt="UpNews" border="0"/></a>
            </div><!--Fechamento da div header_logo-->

            <div id="header_anuncio">
                <img src="imagens/anuncio.png"/>
            </div><!--Fechamento da div header_anuncio-->

            <div id="header_search">
                <form>
                    <label>
                        <span>O que você procura?</span>
                        <input type="text"/>
                        <input type="submit" value="" class="btn"/>
                    </label>
                </form>
            </div><!--Fechamento da div header_surch-->

            <div id="header_menu">
                <ul class="menu_paginas">
                    <li><a href="#">Página inicial</a></li>
                    <li><a href="#">Fale conosco</a></li>
                    <li><a href="#">Sobre nós</a></li>
                </ul>
                <ul class="menu_categorias">
                    <li><a href="#" class="noticias">/noticias</a></li>
                    <li><a href="#" class="esportes">/esportes</a></li>
                    <li><a href="#" class="entretenimento">/entretenimento</a></li>
                    <li><a href="#" class="tecnologia">/tecnologia</a></li>
                </ul>
            </div><!--Fechamento da div header_menu-->

        </div><!--Fechamento da div header-->

        <div id="sidebar_left">
            <h1 class="noticias">/noticias</h1>
            <ul>
                <li><a href="#">sub categoria 01</a></li>
                <li><a href="#">sub categoria 02</a></li>
                <li><a href="#">sub categoria 03</a></li>
                <li><a href="#">sub categoria 04</a></li>
                <li><a href="#">sub categoria 05</a></li>
            </ul>

            <h1 class="esportes">/esportes</h1>
            <ul>
                <li><a href="#">sub categoria 01</a></li>
                <li><a href="#">sub categoria 02</a></li>
                <li><a href="#">sub categoria 03</a></li>
                <li><a href="#">sub categoria 04</a></li>
                <li><a href="#">sub categoria 05</a></li>
            </ul>

            <h1 class="entreterimento">/entreterimento</h1>
            <ul>
                <li><a href="#">sub categoria 01</a></li>
                <li><a href="#">sub categoria 02</a></li>
                <li><a href="#">sub categoria 03</a></li>
                <li><a href="#">sub categoria 04</a></li>
                <li><a href="#">sub categoria 05</a></li>
            </ul>

            <h1 class="tecnologia">/tecnologia</h1>
            <ul>
                <li><a href="#">sub categoria 01</a></li>
                <li><a href="#">sub categoria 02</a></li>
                <li><a href="#">sub categoria 03</a></li>
                <li><a href="#">sub categoria 04</a></li>
                <li><a href="#">sub categoria 05</a></li>
            </ul>

            <h1 class="especial">/especial</h1>
            <ul>
                <li><a href="#">sub categoria 01</a></li>
                <li><a href="#">sub categoria 02</a></li>
                <li><a href="#">sub categoria 03</a></li>
                <li><a href="#">sub categoria 04</a></li>
                <li><a href="#">sub categoria 05</a></li>
            </ul>

            <div id="left_adsence">
                <img src="imagens/anuncio2.png"/>
            </div>
        </div><!--Fecha a left sidebar-->

        <div id="content">

            <div id="content_destaque">

                <div id="content_destaque_conteudo">
                    <ul>
                        <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting .</a></li>
                        <li>
                            <ul>
                                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting .</a></li>
                                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting .</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><img src="midias/ilustra-100.png" alt="" border="0"/></a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting .</p>
                        </li>
                    </ul>
                </div><!--content destaque conteudo-->

                <div id="content_destaque_destaque">
                    <span><a href="#">Postado em 05/05/2020</a></span>
                    <a href="#"><img src="midias/ilustra-300.png" alt="" border="0"></a>
                    <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting .</a></p>
                </div><!--content_destaque_destaque -->

            </div>

            <div id="content_entreterimento">

                <div id="content_entreterimento_conteudo">
                    Entreterimento conteudo
                </div><!-- content_entreterimento_conteudo -->

                <div id="content_entreterimento_anuncio">
                    Entreterimento anuncios
                </div><!--  content_entreterimento_anuncio -->

            </div><!-- content_entreterimento -->

            <div id="contet_esportes">

                <div id="content_esportes_conteudo">
                    Esportes conteudo
                </div><!--  content_esportes_conteudo -->

                <div id="content_esportes_comentados">
                    content esportes comentados
                </div><!-- content_esportes_comentados -->

            </div><!--Fecha div de conteúdos para esportes-->            

            <div id="contet_tecnologia">

                <div id="content_tecnologia_destaque">
                    Tecnologia Destaques
                </div>

                <div id="content_tecnologia_conteudo">
                    Tecnologia Conteudo
                </div>

            </div><!-- contet_tecnologia -->

            <div id="content_vistos">

                <div id="content_vistos_conteudo">
                    Content vistos conteudo
                </div>

                <div id="content_vistos_anuncio">
                    Content vistos anuncio
                </div>

            </div><!-- Content Vistos -->

        </div><!--content -->

        



        <div id="right_sidebar">
            sidebar right
        </div>
        
        <div id="clear"></div>

    </div><!--Fechamento da div box-->
    
    <div id="footer_all">    
        
        <div id="footer">
            <div id="footer_txt">
                footer txt
            </div><!--Fechamento da div footer_txt-->
        </div><!--Fechamento da div footer-->

    </div><!--Fechamento da div footer_all-->
</body>
</html>