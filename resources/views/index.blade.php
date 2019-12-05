
@extends('layouts/principal') 

@section('titulo','TSI Virtual - Inicio') 

@section('active','Inicio')

@section('conteudo')

        <section class="conteudo container blur">
            <h4 class="text-center text-uppercase">noticias</h4>

            <div class="slide row">
                <div class="col-8">
                
                        
                        <div class="noticiaslide item" style="background-image:url('{{Voyager::image( $noticias['0']->imagem)}}');">
                        <a href="/noticias/visualizar/{{$noticias['0']->id}}">
                            <div class="noticiatitulo">
                            <p class="titulo">{{$noticias['0']->titulo}}</p>
                            <p class="data">  {{ \Carbon\Carbon::parse($noticias['0']->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($noticias['0']->created_at)->format('H:i')}}</p>
                            </div>
                        </a>
                        </div>
                 </div>
                 <div class="col-4">
                     <div class="row">
                         <div class="col-12">
                            <div class="noticiaslide item item-secondary" style="background-image:url('{{Voyager::image( $noticias['1']->imagem)}}');">
                        <a href="/noticias/visualizar/{{$noticias['0']->id}}">
                            <div class="noticiatitulo">
                            <p class="titulo">{{$noticias['1']->titulo}}</p>
                            <p class="data">  {{ \Carbon\Carbon::parse($noticias['1']->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($noticias['1']->created_at)->format('H:i')}}</p>
                            </div>
                        </a>
                        </div>
                         </div>
                         <div class="col-12">
                             <div class="noticiaslide item item-secondary" style="background-image:url('{{Voyager::image( $noticias['2']->imagem)}}');">
                        <a href="/noticias/visualizar/{{$noticias['0']->id}}">
                            <div class="noticiatitulo">
                            <p class="titulo">{{$noticias['2']->titulo}}</p>
                            <p class="data">  {{ \Carbon\Carbon::parse($noticias['2']->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($noticias['2']->created_at)->format('H:i')}}</p>
                            </div>
                        </a>
                        </div>
                         </div>
                     </div>
                 </div>    
               
                
            </div>
            <div class="confira">
                <a href="/noticias" class="text-center btn btn-outline-primary ">MAIS NOTICIAS</a>
            </div>
           
        {{-- <a href="" class="prev d-flex justify-content-center align-items-center flex-row"><img src="{{asset('assets/images/seta-branca-.png')}}" alt="" width="50px"></a>
        <a href="" class="prox d-flex justify-content-center align-items-center flex-row"><img src="{{asset('assets/images/seta-branca-.png')}}" alt="" width="50px"></a> --}}

        </section>


        <section class="egressoss container blur">
            <h3 >Conheça um pouco de nossos ex alunos</h3>
             <div class="egressosslide">
                @foreach($egressos as $a)
                <div class="aluno" style="background-image:url('{{Voyager::image( $a->foto)}}');">

                        <div class="apresentacao">
                                <p class="nome">
                                        {{$a->nome}}
                                    </p>
                                    <p class="funcao">
                                            {{$a->funcao}}
                                    </p>
                                    <p class="empresa">
                                            {{$a->empresa}}
                                    </p>
                        </div>
                </div>
                @endforeach
               
            </div> 
            <h3 >Venha fazer parte dessa história você também</h3>
            <div class="egressosss"><a href="/egressos" class=" btn btn-outline-primary ">EGRESSOS</a></div>
        </section>
    
@endsection


