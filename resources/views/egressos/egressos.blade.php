
@extends('layouts/principal') 

@section('titulo','TSI Virtual - Egressos') 

@section('active','Egressos')

@section('conteudo')

<section class="egressos container blur">
        <div class="pesquisa">
                <form action="/egressos/pesquisar" method="get">
                    <div class="active-cyan-3 active-cyan-4 ">
                        <input class="form-control" type="text" placeholder="Pesquise por um aluno ou empresa..." aria-label="Search" 
                        @if(isset($value))
                        value = "{{$value}}"
                        @endif
                        name="pesquisa">
                        <input type="submit" value="PESQUISAR">
                        <a href="/egressos" class="reload d-flex align-items-center justify-content-center flex-row">RECARREGAR</a>
                    </div>
                </form>
            </div> 
        <h1>EGRESSOS</h1>
        <h3>
        @if(isset($value))
            Sua pesquisa por {{$value}} trouxe {{$egressos->total()}} resultado(s).
        @else
            Exibindo {{$egressos->count()}} egressos de {{$egressos->total()}}
        @endif
        
        </h3>

        @if($egressos->total()!='0')
                <h2>{{$egressos->firstItem()}} a {{$egressos->LastItem()}}</h2>
        @endif


        <div class="row relato ">
                <div class="col-5 d-flex align-items-center justify-content-center flex-row first">
                        Aluno
                </div>
                <div class="col-7 d-flex align-items-center justify-content-center flex-row">
                        Relato
                </div>
        </div>
        @foreach($egressos as $e)
        <div class="row">
        <div class="col-2">
        <div class="foto" style="background-image:url('{{Voyager::image( $e->foto)}}')">

        </div>
        </div>
        <div class="col-3">
                <div class="dados">
                        <p>
                                Nome: {{$e->nome}}
                        </p>
                        <p>
                                Empresa: {{$e->empresa}}
                        </p>
                        <p>
                                Cargo: {{$e->funcao}}
                        </p>
                        <p>
                                Ano de formação: {{$e->ano_formacao}}
                        </p>
                        <p>
                               @if($e->linkedin!='')
                               <a href="{{$e->linkedin}}" target="_blank">Linkedin</a>
                               @endif
                        </p>

                </div>
        </div>
        <div class="col-7">
                <p class="testemunho">
                         {{$e->testemunho}}
                </p>
        </div>
        </div>
        @endforeach
        <div class="paginacao">
            {{$egressos->links()}}
        </div>
</section>
        
    
@endsection 


