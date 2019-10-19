<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">  
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">  
        <title>@yield('titulo')</title>
        
    </head> 
    <body>
            <nav class="menuprincipal">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Noticias</a></li>
                        <li><a href="">Perfil</a></li>
                        <li><a href="">Professores</a></li>
                        <li><a href="">TCCs</a></li>
                        <li><a href="">Horários</a></li>
                        <li><a href="">Egressos</a></li>
                        <li><a href="">Empresas</a></li>
                        <li><a href="">Estagios</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>
            


            <header>
                    <nav class="container"> 
                        <div class="row">
        
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-left esquerda d-flex flex-row justify-content-start align-items-center">
                                <a href="/"><img src="{{asset('assets/images/TSI-icon.png')}}" alt="icone TSI"></a>
                            </div>
        
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right direita d-flex flex-row justify-content-end align-items-center">

        
                                <form action="">
                                    <input type="search" class="form-control input-sm"  aria-label="Search" placeholder="Pesquisa">
                                    <img src="{{asset('assets/images/lupa.png')}}" alt="" width="20px" class="lupa">
                                </form>
                                você ainda não esta logado <a href="#" class="login"> conectar </a>
                            </div>

                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 text-right  d-flex flex-row justify-content-end align-items-center menu">

                                <input type="checkbox" id="inputhamburguer" >

                               <label for="inputhamburguer">
                                    <div class="hamburguer">
                                        <span></span>
                                    </div>
                               </label>

                               
                            </div>
        
                        </div>
                    </nav>

                </header>
                

                @yield('conteudo')


                <div class="modalll  flex-row justify-content-center align-items-center">
                    <div class="modal-centerr">
                        <div class="xis d-flex flex-row justify-content-center align-items-center">X</div>
                    </div>
                </div>

                
            
                    




                <footer >
                    <div class="container">
                            <div class="cont">
                                <div class="row">
                                        <div class="col-3 direita">
                                            <a href="" target="_blank" title="TSI">
                                            <img src="{{asset('assets/images/hqdefault.png')}}" alt="" width="140px">
                                            </a>
                                        </div>
                                        <div class="col-6 text-center centro">
                                                Endereço: Praça Vinte de Setembro, 455 - Bairro: Centro <br>
                                                TSI: Sala da coordenadoria: 147b <br>
                                                Telefone: (53) 2123-1000 - FAX: (53) 2123-1006 <br>
                                                TSI: Ramal 1144
                                        </div>
                                        <div class="col-3 esquerda">
                                            <a href="http://pelotas.ifsul.edu.br/" target="_blank" title="IFSUL Pelotas">
                                                <img src="{{asset('assets/images/if.png')}}" alt="" width="140px">
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <p class="text-center">Copyright&copy; 2019 - Everton Vargas Guetierres - todos os direitos reservados</p>
                    </div>
                    
                </footer>

                    <script src="{{asset('js/jQuery.js')}}"></script>
                    <script src="{{asset('js/slick.min.js')}}"></script>
                    <script src="{{mix('js/app.js')}}"></script>
                </body>
            </html>