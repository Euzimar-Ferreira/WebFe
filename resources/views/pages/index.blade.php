@extends('layouts.page')
@extends('layouts.menu_mobile')

<!-- Definição do Titulo -->
@section('title')
    <title>Index</title>
@endsection
<!-- Section Template Principal: body -->
@section('body')

    <body class="grey lighten-3">
@endsection 

<!-- Section Template Principal: Menu  -->
@section('menuBar')

<div class="navbar-fixed">
    <nav class=" z-depth-0" id="menu" style="height:80px">
      <div class="row nav-wrapper blue darken-4" style="padding-top:10px;padding-bottom:10px !important">
            <div class="col l2 offset-l1 m3 offset-m1 s10 offset-s1">
                <a href="#" class="right hide-on-med-and-down" style=""><i style="font-size:35px" class="material-icons left">home</i> HOME</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-demo" ><i style="font-size:35px" class="material-icons left">menu</i> MENU</a>
            </div>
            <ul class="right hide-on-med-and-down">
            <li><a href="#"><i class="material-icons">alarm</i></a></li>
            <li><a href="#"><i class="material-icons">explore</i></a></li>
            <li><a href="#"><i class="material-icons">favorite</i></a></li>
            <li><a href="#"><i class="material-icons">report_problem</i></a></li>
            <li><a href="#"><i class="material-icons">redeem</i></a></li>
            <li><a href="#" style="margin-right:30px"><i class="material-icons">search</i></a></li>
            <li><a href="{{ route('login') }}" style="margin-right:30px" class="btn waves-light blue darken-2">ACESSAR MEU USUÁRIO
                <i class="material-icons right">
                    person_pin  
                </i>
            </a></li>
            </ul>
      </div>
    </nav>
</div>


@endsection

<!-- Section Template Principal: main  -->
@section('main')

<div class="z-depth-3">
    <div class="row nav-wrapper blue darken-4" style="padding-top:40px;min-height:400px;width:100%;background-image:linear-gradient(to bottom,#0d47a1 4%,#2979ff);padding-bottom:20px">
        <div class="col l2 m4 s8 offset-s2 offset-m4 offset-l5">
            <img src="img/logo.png" class="responsive-img"/>
        </div>
        <div class="center col l4 m6 s12 offset-l4 offset-m3" style="margin-top:10px;">
            
            <span class="blue-text text-lighten-2" style="font-size:17px">
                WebFe.com
            </span>
        </div>
        <div class="center col l4 m6 s12 offset-l4 offset-m3" style="margin-top:20px;">
            
            <span class="blue-text text-lighten-4" style="font-size:17px">
                Gerencie seus Eventos com Esta <br/> Ferramenta Fantástica
            </span>
        </div>
        <div class="col l6 m6 s12 offset-l3 offset-m3" Style="margin-top:40px">
            <div class="col l6 m12 s12" style="padding-bottom:10px">
                 <!-- Botão para Cadastrar Participante -->
                <a href="{{ route('registrar-usuario') }}" class="waves-effect waves-teal btn green accent-4 white-text text-darken-4 z-depth-1" style="width:100%;font-size:15px;text-shadow:1px 1px 5px black">SOU PARTICIPANTE</a>
            </div>
            <div class="col l6 m12 s12">
                <!-- Botão para Cadastrar Gerente -->
               <a href="{{ route('registrar-gerente') }}" class="waves-effect waves-teal btn orange accent-4 white-text text-darken-4 z-depth-1" style="width:100%;font-size:15px;text-shadow:1px 1px 5px black">SOU ORGANIZADOR</a>
           </div>
        </div>
        
    </div>
    <div class="row">
        <div class="blue darken-3 bottom" style="min-height:10px;margin-top:-20px;">
    
        </div>
    </div>
</div>
<div class="grey lighten-2" style="margin-top:-20px;">
    <div class="row" style="padding-top:20px;padding-bottom:40px;">
        <div class="center col l8 offset-l2 s12 m10 offset-m1" >
           <div class="col l4 m6 s12" style="justify-content: center;display: flex;">
                <div class="circle z-depth-3" style="width:200px;min-height:200px;background-image:radial-gradient(yellow,#f06d06); margin-top:20px">
                        <i class="material-icons large" style="margin-top:30px">
                                access_alarm
                        </i>
                        <p>Rápido Acesso</p>
                    </div>
           </div>
           <div class="col l4 m6 s12" style="justify-content: center;display: flex;">
                <div class="circle z-depth-3" style="width:200px;min-height:200px;background-image:radial-gradient(#f44336 35%,#b71c1c);margin-top:20px">
                        <i class="material-icons large" style="margin-top:20px">
                                devices
                        </i>
                        <p>Acesse em<br/>Qualquer Lugar</p>
                    </div>
           </div>
           <div class="col l4 s12" style="justify-content: center;display: flex;">
                <div class="circle z-depth-3" style="width:200px;min-height:200px;background-image:radial-gradient(#76ff03 25%,#1b5e20);margin-top:20px">
                        <i class="material-icons large" style="margin-top:30px">
                                check
                        </i>
                        <p>Fácil de Usar</p>
                    </div>
           </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script>
$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  // START OPEN
  $('.button-collapse').sideNav('show');
});
M.AutoInit();
</script>
@endpush