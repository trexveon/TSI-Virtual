
@extends('layouts/principal') 

@section('titulo','TSI Virtual - Inicio') 

@section('active','Inicio')

@section('conteudo')

        <section class="conteudo container">
            <h3 class="text-center">Confira as últimas noticias</h3>

            <div class="slide">

                @foreach($noticias as $n)
                   
                        <div class="noticiaslide item" style="background-image:url('{{Voyager::image( $n->imagem)}}');">
                        <a href="/noticia/{{$n->id}}">
                            <div class="noticiatitulo">
                            <p class="titulo">{{$n->titulo}}</p>
                            <p class="data">  {{ \Carbon\Carbon::parse($n->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($n->created_at)->format('H:i')}}</p>
                            </div>
                        </a>
                        </div>
                     
                @endforeach
                
            </div>
            <div class="confira">
                <a href="" class="text-center btn btn-dark ">MAIS NOTICIAS</a>
            </div>
           
        <a href="" class="prev d-flex justify-content-center align-items-center flex-row"><img src="{{asset('assets/images/seta-branca-.png')}}" alt="" width="50px"></a>
        <a href="" class="prox d-flex justify-content-center align-items-center flex-row"><img src="{{asset('assets/images/seta-branca-.png')}}" alt="" width="50px"></a>

        </section>


        <section class="egressos container">
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
            <div class="egressoss"><a href="" class=" btn btn-dark ">EGRESSOS</a></div>
        </section>
    
@endsection


