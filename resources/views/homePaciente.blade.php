@extends('templates.master')

@section('css-view')

@endsection



@section('conteudo-view')

<div class="container overflow-auto" id="containerPadrao">

    @forelse ($data as $paciente)
        <div id="dadosPessoais">
            <h1 class="h1Padrao">{{$paciente->nome ?? null}}</h1>
            <br>
            <div style="text-align: center">

                <label class="labelPadraoMedio" style="padding-left:15px;" >Prontuário:</label>
                <label class="labelPadraoMedioBlack" >{{$paciente->prontuario ?? null}}</label> 

                <label class="labelPadraoMedio" style="padding-left:40px;">Número do SUS: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->nro_cartao_saude ?? null}} </label>
            </div>

            <div style="text-align: center">
                <label class="labelPadraoMedio">Nome da mãe: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->nome_mae ?? null}}</label>
                
                <label class="labelPadraoMedio" style="padding-left:50px;">Nascimento: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->dt_nascimento ?? null}}</label>
                <br>
                <label class="labelPadraoMedio">Nome do pai: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->nome_pai ?? null}}</label>
                <label class="labelPadraoMedio" style="padding-left:40px;">Estado Civil: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->estado_civil ?? null}}</label>
            
            </div>

            <div style="text-align: center">
                <label class="labelPadraoMedio">CPF: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->cpf ?? null}}</label>
                
                <label class="labelPadraoMedio" style="padding-left:80px;">RG: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->rg ?? null}}</label>

                <label class="labelPadraoMedio" style="padding-left:80px;">Observacao: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->observacao ?? null}}</label>

   

            </div>
            <div style="text-align: center">
                <label class="labelPadraoMedio" style="">Sexo Biológico: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->sexo_biologico ?? null}}</label>

                <label class="labelPadraoMedio" style="padding-left:40px;">VIP: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->ind_paciente_vip ?? null}}</label>

                <label class="labelPadraoMedio" style="padding-left:40px;">Naturalidade: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->naturalidade ?? null}}</label>
                       
            </div>
            <br>
            
            <div style="text-align: center">

                <label class="labelPadraoMedio" style="padding-left:40px;">Telefone Residencial: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->ddd_fone_residencial ?? null}} {{$paciente->fone_residencial ?? null}}</label>

                <label class="labelPadraoMedio" style="padding-left:40px;">Telefone Recado: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->ddd_fone_recado ?? null}} {{$paciente->fone_recado ?? null}}</label>
                <br>
                <label class="labelPadraoMedio" style="">Email: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->email ?? null}}</label>


            </div>

            <div style="text-align: center">

                <label class="labelPadraoMedio" style="padding-left:40px;">Última internação: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->dt_ult_internacao ?? null}} </label>

                <label class="labelPadraoMedio" style="padding-left:40px;">Última alta: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->dt_ult_alta ?? null}}</label>
                <br>
                <label class="labelPadraoMedio" style="">Data Óbito: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->dt_obito ?? null}}</label>

                <label class="labelPadraoMedio" style="padding-left:40px;">Documento óbito: </label>
                <label class="labelPadraoMedioBlack">{{$paciente->doc_obito ?? null}}</label>

            </div>

        </div>


    @empty
    @endforelse

         <div id="dadosInternacao">
            <h1 class="h1Padrao">Dados internação</h1> 
                <div class="row overflow-auto" id="tabelaPaciente" >
                    <table class="table table-hover table-light" style="text-align: center;">
                        <thead>
                        <tr>
                            <th scope="col">Data e hora internação</th>
                            <th scope="col">Previsão de alta</th>
                            <th scope="col">Data e hora alta</th>
                            <th scope="col">Data e hora saída paciente</th>
                            <th scope="col">Justificativa alta</th>
                            <th scope="col">Sigla</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Andar</th>
                            <th scope="col">Ala</th>
                            <th scope="col">Número</th>
                            <th scope="col">Leito</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $data2 as $internacao )
                            <tr>
                                <td>{{$internacao->dthr_internacao ?? null}}</td>
                                <td>{{$internacao->dt_prev_alta ?? null}}</td>
                                <td>{{$internacao->dthr_alta_medica ?? null}}</td>
                                <td>{{$internacao->dt_saida_paciente ?? null}}</td>
                                <td>{{$internacao->justificativa_alt_del ?? null}}</td>  
                                <td>{{$internacao->sigla ?? null}}</td>  
                                <td>{{$internacao->descricao ?? null}}</td> 
                                <td>{{$internacao->andar ?? null}}</td> 
                                <td>{{$internacao->ind_ala ?? null}}</td> 
                                <td>{{$internacao->qrt_numero ?? null}}</td> 
                                <td>{{$internacao->leito ?? null}}</td> 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
</div>
        
@endsection