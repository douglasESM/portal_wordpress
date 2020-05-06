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
                        <li><h1><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h1></li>
                        <li>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><img src="midias/ilustra-100.png" alt="" border="0"/></a>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </li>
                    </ul>
                </div><!--content destaque conteudo-->

                <div id="content_destaque_destaque">
                    <span><a href="#">Postado em 05/05/2020</a></span>
                    <a href="#"><img src="midias/ilustra-300.png" alt="" border="0"></a>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                </div><!--content_destaque_destaque -->

            </div>

            <div id="content_entreterimento">

                <div id="content_entreterimento_conteudo">
                    <ul>
                        <li>
                            <a href="#"><img src="midias/ilustra-300.png" alt="" width="200" height="100" border="0"/></a>
                            <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                        <li>
                            <a href="#"><img src="midias/ilustra-300.png" alt="" width="200" height="100" border="0"/></a>
                            <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a>
                        </li>
                    </ul>                   
                </div><!-- content_entreterimento_conteudo -->

                <div id="content_entreterimento_anuncio">
                    <img src="imagens/anuncio3.png" alt="">
                </div><!--  content_entreterimento_anuncio -->

            </div><!-- content_entreterimento -->

            <div id="contet_esportes">

                <div id="content_esportes_conteudo">
                    <ul>
                        <li>
                            <a href="#"><img src="midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                            <h1><a href="#">Futebol</a></h1>
                            <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                        </li>

                        <li>
                            <a href="#"><img src="midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                            <h1><a href="#">Futebol</a></h1>
                            <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                        </li>

                        <li>
                            <a href="#"><img src="midias/ilustra-300.png" alt="" width="200" height="100" border="0"></a>
                            <h1><a href="#">Futebol</a></h1>
                            <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                        </li>
                    </ul>

                </div><!--  content_esportes_conteudo -->

                <div id="content_esportes_comentados">
                    <h1 class="especial"> + COMENTADOS</h1>
                    <ol>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    </ol>
                </div><!-- content_esportes_comentados -->

            </div><!--Fecha div de conteúdos para esportes-->            

            <div id="content_tecnologia">

                <div id="content_tecnologia_destaque">
                    <a href="#"><img src="midias/ilustra-300.png" alt="" border="0"></a>
                    <p><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></p>
                </div>

                <div id="content_tecnologia_conteudo">
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    </ul>
                </div>

            </div><!-- contet_tecnologia -->

            <div id="content_vistos">

                <div id="content_vistos_conteudo">
                    <h1>+ vistos</h1>
                    <ol>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    </ol>
                </div>

                <div id="content_vistos_anuncio">
                    <img src="imagens/anuncio41.png" alt="">
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