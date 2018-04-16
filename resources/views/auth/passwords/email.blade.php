@extends('layouts.page')

<!-- Definição do Titulo -->
@section('title')
    <title>Recuperar Senha</title>
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
                        ESQUECI MINHA SENHA
                    </span>

                    <!-- Mensagens -->
                    @if(session('status'))
                        <div class="input-field col l12 m12 s12 green accent-1" style="width:100%;padding:20px">
                          {{session('status')}}
                        </div>
                    @endif
                    
                    @if(isset($errors) && count($errors) > 0)
                        <div class="input-field col l10 offset-l1 m10 offset-m1 s12 red accent-1" style="">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                        </div>
                    @endif

                    <!-- Formulário de Login -->
                    <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                        <!-- Mensagem Avisando o envio do Link de Recuperação --> 
                        <div class="col l12">
                            <br/>
                            <p class="card-title green-text text-darken-4" align="justify" style="font-size:16px">
                                Digite o seu e-mail logo abaixo e clique em "Enviar Link". O sistema enviará um link para o e-mail digitado. Acesse o seu e-mail e clique no link enviado.
                            </p>
                        </div>
                        <!-- Definição Email -->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">Digite seu Email:</label>
                        </div>
                        <!-- Botão para Logar na Conta -->
                        <div class="col l6 s12 offset-l3">
                            <button class="btn blue darken-2 waves-effect waves-blue z-depth-0" style="width:80%;margin-top:20px;" type="submit" name="entrar">Enviar Link
                                <i class="material-icons right green" style="margin-right:-17px;padding-left:10px;padding-right:10px">arrow_forward</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
@endsection