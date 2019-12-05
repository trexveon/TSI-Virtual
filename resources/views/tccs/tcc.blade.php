
@extends('layouts/principal') 

@section('titulo','TSI Virtual - TCCs') 

@section('active','TCC')

@section('conteudo')

        <section class="tccs container blur">
        
         <div class="pesquisa">
            <form action="/tcc/pesquisar" method="get">
                <div class="active-cyan-3 active-cyan-4 ">
                    <input class="form-control" type="text" placeholder="Pesquise por titulos, autor, ano ou palavras-chave..." aria-label="Search" 
                    @if(isset($value))
                        value = "{{$value}}"
                    @endif 
                 name="pesquisa">
                    <input type="submit" value="PESQUISAR">
                    <a href="/tcc" class="reload d-flex align-items-center justify-content-center flex-row">RELOAD</a>
                </div>
            </form>
        </div> 
        <h1>Bem vindo ao repositório de TCCs do TSI</h1>  
        <h3>
            @if(isset($value))
                Sua pesquisa por {{$value}} trouxe {{$tccs->total()}} resultado(s).
            @else
                Exibindo {{$tccs->count()}} TCCs de {{$tccs->total()}}
            @endif
            
        </h3>
        @if($tccs->total()!='0')
            <h2>{{$tccs->firstItem()}} a {{$tccs->LastItem()}}</h2>
        @endif

        <div class="row cabecalho">
            <div class="col-3 cabeca first">Titulo</div>
            <div class="col-3 cabeca">Autor</div>
            <div class="col-3 cabeca">Ano</div>
            <div class="col-3 cabeca">Download</div>
        </div>
                @foreach($tccs as $t)
                    <div class="row conteudotcc">
                        <div class="col-3 itemtcc first">
                            {{$t->titulo}}
                        </div>
                        <div class="col-3 itemtcc">
                            {{$t->aluno}}
                        </div>
                        <div class="col-3 itemtcc">
                            {{$t->ano}}
                        </div>
                        
                        <div class="col-3 itemtcc">
                        <a href="/storage/{{ json_decode($t->arquivo)[0]->download_link}}"><img src="{{asset('assets/images/down.png')}}" alt=""></a>
                        </div>
                    </div>
                @endforeach
                <div class="paginacao">
                    {{$tccs->links()}}
                </div>
        </section>
        
    
@endsection


