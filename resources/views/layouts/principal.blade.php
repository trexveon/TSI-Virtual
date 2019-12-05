<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">  
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">  
        <title>@yield('titulo')</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head> 
    <body>
            <div id="canvas-js">

            </div>


            @error('email')
            <p class="invalidofeedback  text-center" role="alert">
                <strong>{{ $message }}</strong>    
            </p>
            @enderror
            
            @error('password')
            <p class="invalidofeedback  text-center" role="alert">
                <strong>{{ $message }}</strong>        
            </p>
            @enderror

            @error('name')
            <p class="invalidofeedback  text-center" role="alert">
                <strong>{{ $message }}</strong>        
            </p>
            @enderror
            

            <nav class="menuprincipal">
                <ul>
                        <li><a href="/noticias">Noticias</a></li>
                        <li><a href="">Professores</a></li>
                        <li><a href="/tcc">TCCs</a></li>
                        <li class="opensubmenu">
                            <a href="#">Horários</a>
                            <ul class="submenu">
                                <li><a href="">Professores</a></li>
                                <li><a href="">Alunos</a></li>
                            </ul>
                        </li>
                        <li><a href="/egressos">Egressos</a></li>  
                        <li><a href="">Empresas</a></li>
                        <li><a href="">Estagios</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="" class="contato">Contato</a></li>
                        <?php
                        if(Auth::check())  {
                             echo '<li><a href="/logout" class="contato">Logout</a></li>';
                            }
                        ?>
                </ul> 
            </nav>









            
            <div class="modalll  flex-row justify-content-center align-items-center ">
                
                    <div class="modal-centerr log">
                        <div class="xis d-flex flex-row justify-content-center align-items-center">X</div>



                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control"  name="password" required autocomplete="current-password">
    
                                    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            Lembrar?
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Esqueceu sua senha?
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="d-flex align-items-center justify-content-center flex-row registrar"><label for="" class="">Não possuiu uma conta?</label>
                            <a href="" class="btn btn-link regi">Registrar</a></div>

                </div>



                <div class="modal-centerr reg ">
                        <div class="xis d-flex flex-row justify-content-center align-items-center">X</div>

                        <div class="consultar text-center">
                            <label for="consulta" class="col-form-label">Digite o seu número de matricula ou Siape</label><br><input type="text" id="consulta" class="consulta form-control" placeholder="matricula ou siape" name="consulta" style="max-width: 300px; margin:0 auto;">
                        </div>   
                    <div class="text-center botaopesquisarnumero "><button class="pesquisarnumero btn btn-primary">consultar</button> <br>
                    
                    <div class="resultado">
                        <label for="identificacao" class="identificacao">Esse é você?</label>
                        <input type="hidden" class="idusuario">
                        <input type="hidden" class="roleusuario">
                        <input type="text" readonly disabled class="readonly" value="" id="identificacao" style="max-width: 300px; margin:0 auto;"><br>
                        <input type="button" class="btn btn-primary simregistro" value="sim">
                        <input type="button" class="btn btn-danger naoregistro" value="não">
                        </div>
                    <div class="aviso" style="color:red;"></div>

                    </div>    

                    <a href="#" class="logi" style="position:absolute; bottom:15px; left:15px; color:#3F86FF;"> Voltar</a>
                </div>




                <div class="modal-centerr modalregister">
                    <a href="#" class="logivolta" style="position:absolute; bottom:15px; left:15px; color:#3F86FF;"> Voltar</a>



                         <form method="POST" action="{{ route('register') }}" class="formregistro">
                        @csrf

                        <input type="hidden" class="idusuario1" name="info_id">
                        <input type="hidden" class="roleusuario1" name="role_id">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control nomeregistro @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus readonly>
    
                            </div>
                        </div>
          

                        <div class="form-group row">
                            <label for="emailll" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="emailll" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">  
                                <div class="erro erroemail"></div>  
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="passwordd" class="col-md-4 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="passwordd" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="erro errosenha"></div> 
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary submitregister">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>    

                </div>




            </div>

            









            <div class="contatoemail">
                <div class="emailenviar">
                        <div class="xis2 d-flex flex-row justify-content-center align-items-center">X</div>
                        <h3>Fale Conosco</h3>
                        <label for="nome">Nome:</label><input type="text" id="nome" name="nome" class="nome" ><br>
                            <div class="erronome erro"></div>
                        <label for="emaill">Email:</label><input type="email" id="emaill" name="email" class="email" ><br>
                            <div class="erroemail erro"></div>
                        <label for="assunto">Assunto:</label><input type="text" id="assunto" name="assunto" class="assunto" ><br>
                            <div class="erroassunto erro"></div>
                        <label for="mensagem">mensagem:</label><textarea name="mensagem" id="mensagem" cols="30" rows="10" class="mensagem"></textarea><br>
                            <div class="erromensagem erro"></div>
                        <div><button class="enviar">Enviar</button></div>
                </div>
            </div>






            
            <div class="alerta">
                
            </div>








            <header class="header">
                    <nav class="container"> 
                        <div class="row">
        
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 text-left esquerda d-flex flex-row justify-content-start align-items-center p-0">
                                <a href="/"><img src="{{asset('assets/images/TSI-icon.png')}}" alt="icone TSI"></a>
                            </div>
        
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right direita d-flex flex-row justify-content-end align-items-center p-0">

        
                                <form action=""> 
                                    <input type="search" class="form-control input-sm"  aria-label="Search" placeholder="Pesquisa">
                                    <img src="{{asset('assets/images/lupa.png')}}" alt="" width="20px" class="lupa">
                                </form>
                                
                                <?php 
                                    use illuminate\Support\Facades\Auth;  
                                    if(Auth::check())  {
                                        $user = Auth::user();
                                        echo ' Bem vindo <ul><li><a href="/perfil/{{$user->id}}" id="perfil">'.$user->name."</a></li>";
                                        echo 
                                            "
                                                <li id='botaoperfil'><a href='".asset('/perfil')."/".$user->id."'>Perfil</a></li>
                                               
                                                <li id='botaologout'><a href='".asset('/logout')."'>Logout</a></li>
                                            </ul>";

                                    } 
                                    else{
                                        echo ' <a href="#" class="login"> LOGIN </a>';
                                    }
                                ?>
                               
                                
                               
                            </div>

                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 text-right  d-flex flex-row justify-content-end align-items-center menu p-0">

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


                

                
            
                    




                <footer class="footer" >
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
                    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
                    <script src="{{asset('js/slick.min.js')}}"></script>
                    <script src="{{mix('js/app.js')}}"></script>
                    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>                    
                    <script>
                        particlesJS('canvas-js', {
                            "particles":{
                                "number":{
                                    "value":10
                                },
                                "color":{
                                    "value": "#fff"
                                },
                                "shape":{
                                    "type": "image",
                                    "stroke":{
                                        "width":2,
                                        "color":"#000"
                                    },
                                    "image":{
                                        "src" : "{{asset('assets/images/tsibranco.png')}}",
                                        "width": 100,
                                        "height": 100,
                                        "size": {
                                        "value": 90
                                        }
                                    },
                                    },
                                    "size": {
                                        "value": 50,
                                        "random": false
                                    },
                                    "line_linked":{
                                        "width": 4,
                                        "distance": 200
                                    }
                            },
                            "interactivity":{
                                "onclick":{
                                    "enable": false
                                }
                            }                     

                        });
                    </script>
                </body>
            </html>