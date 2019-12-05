
@extends('layouts/principal') 

@section('titulo','TSI Virtual - Noticias') 

@section('active','Noticias')

@section('conteudo')

        <section class="noticias container blur">
                <div class="pesquisa">
                        <form action="/noticias/pesquisar" method="get">
                            <div class="active-cyan-3 active-cyan-4 ">
                                <input class="form-control" type="text" placeholder="Pesquise por titulo, conteúdo ou data..." aria-label="Search" 
                                @if(isset($value))
                                value = "{{$value}}"
                                @endif
                                name="pesquisa">
                                <input type="submit" value="PESQUISAR">
                                <a href="/noticias" class="reload d-flex align-items-center justify-content-center flex-row">RECARREGAR</a>
                            </div>
                        </form>
                    </div> 
        <h1>NOTICIAS</h1>
        <h3>
                @if(isset($value))
                    Sua pesquisa por {{$value}} trouxe {{$noticias->total()}} resultado(s).
                @else
                    Exibindo {{$noticias->count()}} Noticias de {{$noticias->total()}}
                @endif
                
            </h3>
            @if($noticias->total()!='0')
                <h2>{{$noticias->firstItem()}} a {{$noticias->LastItem()}}</h2>
            @endif
       
                @foreach($noticias as $n)
                <div class="row">
                <a href="/noticias/visualizar/{{$n->id}}">
                       <div class="foto" style="background-image:url('{{Voyager::image( $n->imagem)}}');">
                        </div>
                    <div class="titulo"> 
                        <h4>{{$n->titulo}}</h4>
                        <p>{{ \Carbon\Carbon::parse($n->created_at)->format('d/m/Y')}} as {{ \Carbon\Carbon::parse($n->created_at)->format('H:i')}}</p>
                    </div>
             
                </a>
                </div>
                @endforeach
                <div class="paginacao">
                    {{$noticias->links()}}
                </div>
        </section>
        
    
@endsection


