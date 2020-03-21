<!DOCTYPE html>
<html>
    <head>

        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        @yield('css-view')
        <link rel="stylesheet" href="{{asset('css/stylesheetTemplates.css')}}">
        <link rel="stylesheet" href="{{asset('css/stylesheetClasses.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>
                IPE-Interface de Prontuário Eletrônico
        </title>

        
    </head>
    <body>
       <div class="container"  id="mainMaster">
         
            <div class="row" id="cabecalhoMaster" style="align-items: center;"  >

                <div class="col-xl-8 "  >
                    <h1 style="font-size: 55px;"> Interface Prontuário Eletrônico</h1>
                </div>

                <div class="col-xl-4 " style="align-items: center;" >

                    <ul style="list-style-type: none; ">
                        <li><label style="font-size: 30px;" >João Pedro Souza Rolemberg</label></li>
                        <li><label style="font-size: 22px;" >Médico</label></li>
                        <li><label style="font-size: 22px;">CRM:201700</label></li>
                    </ul>

                </div>
  
            </div>

            <div class="row" id="navMaster" >
                <div class="col-xl-6 centered"  >
                    {!! Form::open(['method'=> 'put','class'=> 'form-inline','id'=>'navMasterColForm'])!!}
                   
                            <label class="labelPadrao" style="padding-right:20px;">Pesquisa por prontuário</label>
                            {!! Form:: text('prontuario',null,['id'=>'inserirForms','class'=>'form-control mr-sm-2','placeholder'=>"Número do prontuário",
                                'onkeypress'=>'return event.charCode >=48 && event.charCode<=57'])!!}
                            
                            {!!Form::submit('Pesquisar',['class'=>'btn btn-outline-success my-2 my-sm-0']) !!}
  

                    {!! Form::close() !!}

                    
                </div>
                <div class="col-xl-6"  >
                    <a href="{{route('buscar')}}" class="btn btn-outline-primary">Busca por dados pessoais</a>
                </div>

               
            </div>
                
                
          
            

            
            @yield('conteudo-view')
 
        </div>



    </body>
    <footer>
            <!-- JS -->
            <script src="public/js/jquery.js"></script>
            <script src="public/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="<?php echo asset('js/jquery-3.4.1.min.js')?>"> </script>
            <script type="text/javascript" src="<?php echo asset('js/bootstrap.bundle.min.js')?>"> </script>
    </footer>

</html>