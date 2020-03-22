@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerPadrao">

    @forelse ($data as $paciente)
        <div id="dadosPessoais">
            <h1 class="h1Padrao">{{$paciente->nome ?? null}}</h1>
            <br>
            <div class="row">
                <label class="labelPadraoMedio">Prontuário:</label>
                <label class="labelPadraoMedioBlack" >{{$paciente->prontuario ?? null}}</label> 

                <label class="labelPadraoMedio">Número do SUS: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->nro_cartao_saude ?? null}} </label>
            </div>
            
            <br>
            <label class="labelPadraoMedio">Nome da mãe: </label>
            <label class="labelPadraoMedioBlack">{{$paciente->nome_mae ?? null}}</label>
            <br>
            <label class="labelPadraoMedio">Data de nascimento: </label>
            <label class="labelPadraoMedioBlack">{{$paciente->dt_nascimento ?? null}}</label>
            <br>

            <br>
            <label class="labelPadraoMedio">CPF: </label>
            <label class="labelPadraoMedioBlack">{{$paciente->cpf ?? null}}</label>
            <br>
            <label class="labelPadraoMedio">RG: </label>
            <label class="labelPadraoMedioBlack">{{$paciente->rg ?? null}}</label>
            </div>

        <div id="dadosInternacao">
            <h1>Dados internação</h1> 
        </div>
    @empty
    @endforelse   

</div>
        
@endsection