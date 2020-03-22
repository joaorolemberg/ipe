@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerPadrao">
        
    <div class="row">
        <div class="col-xl-12" style="text-align: center">
            @forelse ($data as $paciente)
                <h1 class="h1Padrao">{{$paciente->nome ?? null}}</h1>
                <br>
                <label class="labelPadraoGrande">Prontuário:</label>
                <label class="labelPadraoGrandeBlack" >{{$paciente->prontuario ?? null}}</label>
                <br>
                <label class="labelPadraoGrande">Nome da mãe: </label>
                <label class="labelPadraoGrandeBlack">{{$paciente->nome_mae ?? null}}</label>
                <br>
                <label class="labelPadraoGrande">Data de nascimento: </label>
                <label class="labelPadraoGrandeBlack">{{$paciente->dt_nascimento ?? null}}</label>
                <br>
                <label class="labelPadraoGrande">Número do SUS: </label>
                <label class="labelPadraoGrandeBlack">{{$paciente->nro_cartao_saude ?? null}} </label>
                <br>
                <label class="labelPadraoGrande">CPF: </label>
                <label class="labelPadraoGrandeBlack">{{$paciente->cpf ?? null}}</label>
                <br>
                <label class="labelPadraoGrande">RG: </label>
                <label class="labelPadraoGrandeBlack">{{$paciente->rg ?? null}}</label>
                {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
                    {!! Form:: hidden('prontuario',$paciente->prontuario)!!}
                    <div style="text-align: center">
                        {!!Form::submit('Confirmar',['id'=>'btnBuscaTotal','class'=>'btn btn-outline-success my-2 my-sm-0']) !!}
                    </div>
                    
                {!! Form::close() !!}
                <br>

            @empty
                <h1 class="h1Padrao">Prontuário não encontrado</h1>
                <h3 class="h3Padrao">Número de prontuário errado ou o paciente não está cadastrado</h3>
            @endforelse

        </div>

    </div>
        
        
</div>
@endsection

