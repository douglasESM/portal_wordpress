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
                    <li><a href="#" class="entretenimento">/entreterimento</a></li>
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
                            <p class="lista">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </li>
                    </ul>
                </div><!--FIM content destaque conteudo-->

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
                    <h1 class="videos">/vídeos</h1>
                    
                    <iframe width="300" 
                            height="225" 
                            src="https://www.youtube.com/embed/WEsk3qVQQ4c" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                    </iframe>
                </div>

            </div><!-- Content Vistos -->

        </div><!--content -->

        



        <div id="right_sidebar">
            <div id="sidebar_newsletter">
                <h1 class="sidebar_newsletter">/newsletter</h1>
                <form>
                    <label>
                        <input type="text/">
                        <input type="submit" value="Cadastrar"class="btn">
                        <span>Seu e-mail</span>
                    </label>
                </form>
            </div><!--fim sidebar_newsletter-->

            <div id="sidebar_enquete">

                <h1 class="sidebar_enquete">/Enquete</h1>
                
                <span>O que achou do nosso site?</span>
                <ul>
                    <li>() Muito Bom </li>
                    <li>() Bom</li>
                    <li>() Não gostei</li>
                </ul>

                <a href="#">VOTE</a>
                <a href="#" class="ver_result">VER RESULTADOS</a>

            </div><!--fim sidebar_enquete-->

            <div id="sidebar_siganos">
                <h1 class="sidebar_siganos">/siga a UpNews</h1>                
                <ul>
                    <li><a href="#"><img src="imagens/siganos_instagran.png" target="_blank" alt="Siganos no Instagran"></a></li>
                    <li><a href="#"><img src="imagens/siganos_twitter.png" target="_blank" alt="Siganos no Twitter"></a></li>
                    <li><a href="#"><img src="imagens/siganos_facebook.png" target="_blank" alt="Siganos no Facebook"></a></li>
                </ul>
            </div><!--Fecha div sidebar_siganos-->

            <div id="sidebar_equipe">

                <h1 class="sidebar_equipe">/siga a UpNews</h1>
                <ul>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>
                        <a href="#">/blog do autor</a>                        
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>
                        <a href="#">/blog do autor</a>                        
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>
                        <a href="#">/blog do autor</a>                        
                    </li>
                </ul>
            </div><!--Fecha a div sidebar_equipe-->

            <div id="sidebar_plantao">
                <h1 class="sidebar_plantao">/plantão</h1>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></li>
                </ul>
            </div><!--Fecha a div sidebar_plantao-->

            <div id="sidebar_comentadores">

                <h1 class="sidebar_comentadores">/usuários do mês</h1>
                <ul>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>                                               
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>                                                
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>                                                
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>                                                
                    </li>
                    <li>
                        <img src="imagens/autor.png" alt="" height="48px" width="48px">
                        <span>Douglas E. S. Morais</span>                                                
                    </li>
                </ul>
            </div><!--Fecha a div sidebar_comentadores-->

        </div><!--Fecha div right_sidebar -->

        
        
        <div id="clear"></div>

    </div><!--Fechamento da div box-->
    
    <div id="footer_all">    
        
        <div id="footer">
            <ul>
                <li><a href="#">noticias</a></li>
                <li><a href="#">esportes</a></li>
                <li><a href="#">entreterimento</a></li>
                <li><a href="#">tecnologia</a></li>
            </ul>
            <div id="footer_txt">
                <a href="#"><img src="imagens/upnews.png" alt="Desenvilvido por Douglas Morais, Todos os direitos reservados" border="0"></a>
            </div><!--Fechamento da div footer_txt-->
        </div><!--Fechamento da div footer-->

    </div><!--Fechamento da div footer_all-->
</body>
</html>