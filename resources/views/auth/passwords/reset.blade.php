

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
            <img src="{{ asset('/img/logo.png') }}" alt="Logo do site @Fé.com" width="125px" height="68px"/>
        </div>

        <!-- card de login -->
        <div class="row">
            <div class="col l6 m6 offset-l3 offset-m3 white" style="margin-top:-150px; padding-left:60px;padding-right:60px;padding-bottom:30px">
                <br/>
                <div class="row">
                    <!-- Título do Card -->
                    <span class="card-title blue-text text-darken-4" style="font-size:20px">
                        ACESSO DO USUÁRIO
                    </span>
                    <!-- Formulário de Login -->
                    <form action="{{ route('password.request') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- Definição Email -->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus>
                            <label for="email">Digite seu Email:</label>
                            <!-- Mensagem erro, Caso Ocorra -->
                            @if ($errors->has('email'))
                            <span class="red-text left"> 
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <!-- Definição de Senha -->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" name="password">
                            <label for="password">Nova Senha:</label>
                            <!-- Mensagem erro, Caso Ocorra -->
                            @if ($errors->has('password'))
                                <span class="red-text left"> 
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                         <!-- Definição de Repetir Senha -->
                         <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password-confirm" type="password" name="password_confirmation">
                            <label for="password">Repete a Senha:</label>
                            @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <!-- Botão para Logar na Conta -->
                        <div class="col l6 s12 offset-l3">
                            <button class="btn blue darken-2 waves-effect waves-blue z-depth-0" style="width:80%;margin-top:40px;" type="submit" name="entrar">ALTERAR SENHA
                                <i class="material-icons right green" style="margin-right:-17px;padding-left:10px;padding-right:10px">arrow_forward</i>
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
    @endsection