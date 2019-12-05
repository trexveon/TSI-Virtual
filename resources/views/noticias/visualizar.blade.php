
@extends('layouts/principal') 

@section('titulo','TSI Virtual - Visualizar Noticias') 

@section('active','Noticias')

@section('conteudo')

        <section class="visualizarnoticias container blur">
            <div class="imagem" style="background-image:url('{{Voyager::image( $noticia->imagem)}}');">
                <div class="titulo">
                    <h3>{{$noticia->titulo}}</h3>
                    <p>{{ \Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($noticia->created_at)->format('H:i')}}</p>
                </div>
            </div>
            
            <p class="conteudonoticia">{!!$noticia->conteudo!!}</p>
            
        </section>
        
    
@endsection


