<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class pacienteController extends Controller
{
    //
    public function buscaProntuario(Request $request ){
        dd($request->all());
        

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
}
