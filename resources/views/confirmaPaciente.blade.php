@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerPadrao">
        
    <div class="row">
        <div class="col-xl-12">
            @forelse ($data as $paciente)
                <label> Prontuário: {{$paciente->prontuario ?? null}}</label>
                <label>Nome: {{$paciente->nome ?? null}}</label>
                <label>Nome da mãe: {{$paciente->nome_mae ?? null}}</label>
                <label>Data de nascimento: {{$paciente->dt_nascimento ?? null}}</label>
                <label>Número do SUS: {{$paciente->nro_cartao_saude ?? null}} </label>
                <label>CPF: {{$paciente->cpf ?? null}}</label>
                <label>RG: {{$paciente->rg ?? null}}</label>
            @empty
                <h1 class="h1Padrao">Prontuário não encontrado</h1>
                <h3 class="h3Padrap">Número de prontuário errado ou o paciente não está cadastrado</h3>
            @endforelse

        </div>

    </div>
        
        
</div>
@endsection

