<!DOCTYPE html>
<html>
    <head>

        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/stylesheetLogin.css')}}">
        <link rel="stylesheet" href="{{asset('css/stylesheetClasses.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>
                IPE-Interface de Prontuário Eletrônico
        </title>

        
    </head>
    <body>
       <div class="container-fluid"  id="mainLogin">
         
        
            <div class="row" id="cabecalhoLogin"  >
                <div class="col-xl-10 col-md-3" >
                            
                </div>

                <div class="col-xl-2 col-md-3" id="cabecalhoLoginCad" >
                    <a href="">Cadastre-se</a>
                </div>
                    
            </div>

            <div class="container" id="divCentral" >


                <h1 class="display-1">Prontuário Eletrônico</h1>
                
                <div id="divForm">
                    <form method="post" action="{{ action('loginController@fazerLogin') }}">

                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                        <div class="form-group">
                            <label class="labelForms" >Usuário</label>
                            <input name="username" type="text" class="form-control" style="min-height:50px; font-size:25px;">
                        </div>

                        <div class="form-group">
                            <label class="labelForms">Senha</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" 

                            style="min-height:50px; font-size:25px; ">
                        </div>
                        <br>

                        <a href="">Esqueci minha senha</a>

                        <button type="submit" id="btnLogin" class="botao">Entrar</button>
                        
                    </form>
                </div>
                <br> 
                
                            
                    

                    
                    
            


            </div>
                
                
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