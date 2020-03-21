@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')
<div class="container overflow-auto" id="containerPadrao">

        <h1 class="h1Padrao">Lista de pacientes</h1>
        <br>
        <h3 class="h3Padrao">Insira o número do prontuário do paciente desejado no campo número de prontuário acima</h3>
        <div class="row overflow-auto" id="tabelaPaciente" >
          <table class="table table-hover table-light" style="text-align: center;">
            <thead>
              <tr>
                <th scope="col">Prontuário</th>
                <th scope="col">Nome</th>
                <th scope="col">Nome da mãe</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Numero do SUS</th>
                <th scope="col">RG</th>
                <th scope="col">CPF</th>
              </tr>
            </thead>
            <tbody>
            @foreach ( $data as $paciente )
                  <tr>
                    <td>{{$paciente->prontuario ?? null}}</td>
                    <td>{{$paciente->nome ?? null}}</td>
                    <td>{{$paciente->nome_mae ?? null}}</td>
                    <td>{{$paciente->dt_nascimento ?? null}}</td>
                    <td>{{$paciente->nro_cartao_saude ?? null}}</td>  
                    <td>{{$paciente->cpf ?? null}}</td>  
                    <td>{{$paciente->rg ?? null}}</td>
                  </tr>
            @endforeach
            </tbody>
          </table>
        </div>
</div>

        
@endsection