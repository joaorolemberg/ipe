@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerPadrao">
        <h1 class="h1Padrao">{{$mensagem ?? null}}</h1>
        
</div>
@endsection