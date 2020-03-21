@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerPadrao">
    <h1 class="h1Padrao"> Busca por dados pessoais do paciente</h1>
    <h3 class="h3Padrao" >Preencha ao menos um campo para consultar</h3>
    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
    
        <label class="labelPadrao"> Nome do paciente</label>
        {!! Form:: text('nomePaciente',null,['id'=>'','class'=>'form-control form1','placeholder'=>"Nome completo ou parte"])!!}
        <br>
        <label class="labelPadrao"> Nome da mãe</label>
        {!! Form:: text('nomeMae',null,['id'=>'','class'=>'form-control form1','placeholder'=>"Nome completo ou parte"])!!}
        <br>
        <label class="labelPadrao"> Data de nascimento </label>
        {!!Form::date('dataNascimento') !!}
        <br>
        <label class="labelPadrao   ">Número do SUS</label>
        {!! Form:: text('numeroSUS',null,['id'=>'inserirForms','class'=>'form-control form1','placeholder'=>"Número do cartão de saúde",
                                'onkeypress'=>'return event.charCode >=48 && event.charCode<=57'])!!}
        <br>
        <div class="container-fluid" style="text-align:center; ">
            {!!Form::submit('Buscar',['id'=>'btnBuscaTotal','class'=>'btn btn-outline-primary']) !!}
        </div>
        <br>     


    {!! Form::close() !!}
</div>

        
@endsection