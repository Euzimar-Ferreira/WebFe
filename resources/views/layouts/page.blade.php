<!doctype html>
<html>
    <head>
        <!-- tradução em Português -->
        <meta charset="utf-8">
        <!-- renderização para explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Import google fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('/css/website.css') }}"  media="screen,projection"/>
        <!-- Import JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Import google Font -->
        
        <!-- Import icone Site -->
        <link rel="icon" type="imagem/png" href="img/icone4.png" />

         <style>
            .imagem:hover .dd{
                display:block !important;
            }
            .menu_lateral{
    float: left;
    margin-left:20px;
}
        </style>

        <!-- Definição do Título -->
        @yield('title')
    </head>
    @yield('body')
        <!-- bloco geral da página -->
        <div class="geral">
                <!-- bloco para barra de menu -->
                <div class="barraMenu">

                    @yield('menuBar')

                </div>
                <!-- bloco para barra mobile -->
                <div class="barraMobile">
                
                    @yield('mobile')

                </div>
                <!-- bloco para conteúdo -->
                
                <div class="main">
                
                    @yield('main')

                </div>
                <!-- bloco para rodapé -->
                <div class="footer">
                
                    @yield('footer')

                </div>
        </div>

        <!-- Import JS -->
        <script type="text/javascript" src="{{asset('/js/materialize.min.js')}}"></script>
        <!-- <script type="text/javascript" src="js/validacao/jquery.maskedinput.min.js"></script>
        <script type="text/javascript" src="js/validacao/jquery.validate.min.js"></script> -->
        <!-- Imports Scripts específico das páginas -->
        @stack('scripts')
        
        <!-- Inicio Script JS JQuery -->
        <script>
            //Iniciar Todos Módulos Materialize
             M.AutoInit();
        </script>
    </body>
</html>