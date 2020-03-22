<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use DateTime;


class pacienteController extends Controller
{
    //
    public function buscaProntuario(Request $request ){
        
        try{
      
            return redirect()->route('confirmar', ['prontuario' => $request->get('prontuario')]);

        }catch(Exception $e){

        }
        
        //dd($request->all());
        

    }
    public function buscaGeral(Request $request ){

        try{
            
            $nome=$request->get('nomePaciente');
            $nomeMae=$request->get('nomeMae');
            $dataNascimento=$request->get('dataNascimento');
            $sus=$request->get('numeroSUS');

            if($nome!=null){
                if($nomeMae!=null){
                    if($dataNascimento !=null){
                        if($sus!= null){
                            //CONSULTA POR nome, nomeMae,data e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                                ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                            'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                                ->whereRaw('ap.nome like upper(?)
                                            OR ap.nome_mae LIKE upper(?)
                                            OR ap.nro_cartao_saude= ? 
                                            OR ap.dt_nascimento::date = ?',
                                            ["%$nome%","%$nomeMae%",$sus,$dataNascimento] )
                                ->get();
                        }else{
                            //CONSULTA POR nome, nomeMae,data
                            $data=DB::table('agh.aip_pacientes as ap')
                                ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                            'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                                ->whereRaw('ap.nome like upper(?)
                                            OR ap.nome_mae LIKE upper(?)
                                            OR ap.dt_nascimento::date = ?',
                                            ["%$nome%","%$nomeMae%",$dataNascimento] )
                                ->get();
                        }
                    }else{
                        if($sus!= null){
                            //CONSULTA POR nome, nomeMae e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)
                                        OR ap.nome_mae LIKE upper(?)
                                        OR ap.nro_cartao_saude= ? ',
                                        ["%$nome%","%$nomeMae%",$sus] )
                            ->get();
                        }else{
                            //CONSULTA POR nome, nomeMae
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)
                                        OR ap.nome_mae LIKE upper(?)',
                                        ["%$nome%","%$nomeMae%"] )
                            ->get();
                        }
                    }
                }else {
                    if($dataNascimento !=null){
                        if($sus!= null){
                            //CONSULTA POR nome,data e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)
                                        OR ap.nro_cartao_saude= ? 
                                        OR ap.dt_nascimento::date = ?',
                                        ["%$nome%",$sus,$dataNascimento] )
                            ->get();
                        }else{
                            //CONSULTA POR nome,data 
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)
                                        OR ap.dt_nascimento::date = ?',
                                        ["%$nome%",$dataNascimento] )
                            ->get();
                        }
                    }else{
                        if($sus!= null){
                            //CONSULTA POR nome,SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)
                                        OR ap.nro_cartao_saude= ? ',
                                        ["%$nome%",$sus] )
                            ->get();
                        }else{
                            //CONSULTA POR nome
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome like upper(?)',
                                        ["%$nome%"] )
                            ->get();
                        }
                    }
                }
            }else{
                if($nomeMae!=null){
                    if($dataNascimento !=null){
                        if($sus!= null){
                            //CONSULTA POR nomeMae,data e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome_mae LIKE upper(?)
                                        OR ap.nro_cartao_saude= ? 
                                        OR ap.dt_nascimento::date = ?',
                                        ["%$nomeMae%",$sus,$dataNascimento] )
                            ->get();
                        }else{
                            //CONSULTA POR  nomeMae,data
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome_mae LIKE upper(?) 
                                        OR ap.dt_nascimento::date = ?',
                                        ["%$nomeMae%",$dataNascimento] )
                            ->get();
                        }
                    }else{
                        if($sus!= null){
                            //CONSULTA POR nomeMae e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome_mae LIKE upper(?)
                                        OR ap.nro_cartao_saude= ? ',
                                        ["%$nomeMae%",$sus] )
                            ->get();
                        }else{
                            //CONSULTA POR nomeMae
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nome_mae LIKE upper(?)',
                                        ["%$nomeMae%"] )
                            ->get();
                        }
                    }
                }else {
                    if($dataNascimento !=null){
                        if($sus!= null){
                            //CONSULTA POR data e SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nro_cartao_saude= ? 
                                        OR ap.dt_nascimento::date = ?',
                                        [$sus,$dataNascimento] )
                            ->get();
                        }else{
                            //CONSULTA POR data
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.dt_nascimento::date = ?',
                                        [$dataNascimento] )
                            ->get(); 
                        }
                    }else{
                        if($sus!= null){
                            //CONSULTA POR SUS
                            $data=DB::table('agh.aip_pacientes as ap')
                            ->select(   'ap.prontuario as prontuario','ap.nome','ap.nome_mae',
                                        'ap.dt_nascimento','ap.cpf','ap.rg','ap.nro_cartao_saude')
                            ->whereRaw('ap.nro_cartao_saude= ?',
                                        [$sus] )
                            ->get();
                        }else{
                            //NÃO HÁ CONSULTA, NENHUM CAMPO PREENCHIDO
                            $msg= 'Não é possível fazer a consulta sem nenhum campo preenchido! Tente novamente';
                            return(view('templates.avisos',[
                                'mensagem'=>$msg
                            ] ));
                        }
                    }
                }
            }

            return (view('tabelaPacientes',['data'=>$data]));

        }catch(Exception $e){
            $msg= 'Não é possível fazer a consulta sem nenhum campo preenchido! Tente novamente';
            return(view('templates.avisos',[
                'mensagem'=>$msg
            ] ));
        }


        //return view('tabelaPacientes');
        

    }

    public function confirmacao(Request $request ){
        $data = DB::select('
            select ap.prontuario,ap.nome,ap.nome_mae,
            ap.dt_nascimento,ap.cpf,ap.rg,ap.nro_cartao_saude
            from agh.aip_pacientes as ap
            where ap.prontuario=?    ',[$request->get('prontuario')]);

        return view('confirmaPaciente',['data'=>$data]);

    }   
    public function consultaTotal(Request $request ){
        $data1 = DB::select('select ap.prontuario,ap.nome,ap.nome_social, ap.nome_mae, ap.dt_nascimento::date,ap.dt_identificacao,ap.sexo,ap.sexo_biologico, ap.cpf,
			  ap.rg,ap.orgao_emis_rg,ap.nro_cartao_saude, ap.ind_paciente_vip,ap.nome_pai,ap.email,ap.naturalidade,ap.estado_civil,ap.ddd_fone_residencial,
			  ap.fone_residencial,ap.ddd_fone_recado,ap.fone_recado, ap.observacao,ap.dt_ult_internacao::date,ap.dt_ult_alta::date ,ap.dt_obito::date ,ap.dt_obito_externo ,
			  ap.tipo_data_obito,ai.doc_obito 
			  from agh.aip_pacientes as ap
			  left join agh.ain_internacoes as ai on (ai.pac_codigo=ap.codigo) 
              where ap.prontuario=?',[$request->get('prontuario')]);
            
        $dtnasc=$data1[0]->dt_nascimento;
        $formato1 = new DateTime($dtnasc);
        $data1[0]->dt_nascimento=$formato1->format('d-m-Y'); 
        
        $dtInternacao=$data1[0]->dt_ult_internacao;
        $formato2 = new DateTime($dtInternacao);
        $data1[0]->dt_ult_internacao=$formato2->format('d-m-Y'); 

        $dtAlta=$data1[0]->dt_ult_alta;
        $formato3 = new DateTime($dtAlta);
        $data1[0]->dt_ult_alta=$formato3->format('d-m-Y'); 

        $dtObito=$data1[0]->dt_obito;
        if( $dtObito!=null){
            $formato4 = new DateTime($dtObito);
            $data1[0]->dt_obito=$formato4->format('d-m-Y');
        }
        $data2=DB::select('
        
            select ap.prontuario,ap.nome,ap.nome_social,servidor.nome as medico,ai.dthr_internacao,
                    ai.dt_prev_alta,ai.dthr_alta_medica,ai.dt_saida_paciente,ai.dthr_primeiro_evento,
                    ai.dthr_ultimo_evento,ai.justificativa_alt_del,ai.apo_seq,ai.dthr_aviso_samis,
                    ai.dthr_prontuario_buscado,au.sigla,au.descricao,au.andar,au.ind_ala,
                    al.qrt_numero,al.leito
			  from agh.ain_internacoes as ai 
			  left join agh.aip_pacientes as ap on (ai.pac_codigo=ap.codigo)
			  left join (select ser_matricula_cadastro,nome
			  from agh.aip_pacientes) as servidor 
			  on(servidor.ser_matricula_cadastro=ai.ser_matricula_digita)
			  left join agh.ain_leitos as al on(al.lto_id=ai.lto_lto_id)
		          left join agh.agh_unidades_funcionais as au on(au.unf_seq=al.unf_seq)		          
	                  where ap.prontuario=?',[$request->get('prontuario')]);

        return view('homePaciente',['data'=>$data1,
                                    'data2'=>$data2]);
        dd($request->all());
    }
}
