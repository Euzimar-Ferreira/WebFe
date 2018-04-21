@extends('layouts.page')

<!-- Definição do Titulo -->
@section('title')
    <title>Login</title>
@endsection
<!-- Section Template Principal: body -->
@section('body')

    <body class="grey lighten-3">
@endsection 

<!-- Section Template Principal: main  -->
@section('main')

    <center> 
        <!-- Import logo -->
        <div class="blue darken-1" style="min-height:260px">
            <br/>
            <img src="img/logo.png" alt="Logo do site @Fé.com" width="125px" height="68px"/>
        </div>

        <!-- card de login -->
        <div class="row">
            <div class="col l6 m6 offset-l3 offset-m3 white" style="margin-top:-150px; padding-left:10px;padding-right:20px;padding-bottom:30px">
                <br/>
                <div class="row">
                    <!-- Título do Card -->
                    <span class="card-title blue-text text-darken-4" style="font-size:20px">
                        ACESSO DO USUÁRIO
                    </span>

                    <!-- Alertas -->
                    @if(isset($errors) && count($errors) > 0)
                        <div class="input-field col l10 offset-l1 m10 offset-m1 s12 red accent-1" style="">
                          @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                          @endforeach
                        </div>
                    @endif

                    <!-- Formulário de Login -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <!-- Definição Email -->
                        <div class="input-field col s12 l10 offset-l1 m10 offset-m1">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus>
                            <label for="email">Digite seu Email:</label>
                        </div>

                        <!-- Definição de Senha -->
                        <div class="input-field col s12 l10 offset-l1 m10 offset-m1">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" name="password">
                            <label for="password">Digite a sua Senha:</label>
                        </div>

                        <!-- Esqueci Minha Senha -->
                        <a href="{{ route('password.request') }}" class="col l5 m7 red-text text-darken-2 right waves-effect waves-blue z-depth-0" style="">Esqueci Minha Senha</a>

                        <!-- Botão para Logar na Conta -->
                        <div class="col l6 m8 offset-m2 s12 offset-l3">
                            <button class="btn blue darken-2 waves-effect waves-blue z-depth-0" style="width:80%;margin-top:40px;" type="submit" name="entrar">ENTRAR 
                                <i class="material-icons right green" style="margin-right:-17px;padding-left:10px;padding-right:10px">arrow_forward</i>
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        <!-- Botão para Cadastrar Usuário -->
        <a href="{{ route('registrar-usuario') }}" class="waves-effect waves-teal btn grey lighten-1 green-text text-darken-4 z-depth-0" style="width:50%">Cadastre-se AQUI</a>
    </center>
    @endsection