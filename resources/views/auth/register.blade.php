@extends('layouts.page')

<!-- Definição do Titulo -->
@section('title')
    <title>Cadastrar</title>
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
            <img src="img/logo.png" alt="Logo do site @Fé.com" width="125px" height="68px" />
        </div>

        <!-- card de login -->
        <div class="row">
            <div class="col l6 m6 offset-l3 offset-m3 white" style="margin-top:-150px; padding-left:60px;padding-right:60px;padding-bottom:30px">
                <br/>
                <div class="row">
                    <!-- Título do Card -->
                    <span class="card-title blue-text text-darken-4" style="font-size:20px">
                        ACESSAR
                    </span>
                    <!-- Formulário de Login -->
                    <form id="frmCadastro" action="{{ route('register') }}" method="POST">
                        <!-- Definição do token -->
                        @csrf
                        <!-- Definição Nome -->
                        <div class="input-field col l6 s12">
                            <input id="name" type="text" class="validate pula" name="name" required>
                            <!--placeholder="Informe aqui seu nome"-->
                            <label for="name">Nome:</label>
                        </div>
                        <!-- Definição Sobrenome -->
                        <div class="input-field col l6 s12">
                            <input id="lastname" type="text" class="validate pula" name="lastname" required>
                            <label for="lastname">Sobrenome:</label>
                        </div>
                         <!-- Definição Sexo -->
                         <div class="input-field col l4 s12" id="sex" >   
                                <select name="sex">
                                <option value="Feminino">Feminino</option>
                                <option value="Masculino">Masculino</option>
                                </select>
                                <label>Sexo</label>
                        </div>
                        <!-- Definição Cep -->
                        <div class="input-field col l4 s12">   
                            <input id="cep" type="text" class="validate pula"  name="cep" required>
                            <label for="CEP">CEP:</label>
                        </div>
                        <!-- Definição Bairro -->
                        <div class="input-field col l4 s12">   
                            <input id="bairro" type="text" class="validate pula" name="bairro" required>
                            <label for="bairro">Bairro:</label>
                        </div>
                        <!-- Definição Cidade -->
                        <div class="input-field col l8 s12">   
                            <input id="city" type="text" value=" " class="validate" name="city" required>
                            <label for="city">Cidade:</label>
                        </div>
                         <!-- Definição UF -->
                         <div class="input-field col l4 s12">   
                            <input id="uf" type="text" value=" " class="validate" name="uf" required>
                            <label for="UF">UF:</label>
                        </div>
                        <!-- Definição Endereço -->
                        <div class="input-field col l8 s12">   
                            <input id="address" type="text" class="validate pula" name="address" required>
                            <label for="address">Endereço:</label>
                        </div>
                        <!-- Definição Número -->
                        <div class="input-field col l4 s12">   
                            <input id="number" type="text" class="validate pula" name="number" required>
                            <label for="number">Número:</label>
                        </div>
                        <!-- Definição Data Nascimento -->
                        <div class="input-field col l6 s12">
                            <input class="datepicker pula" placeholder="Clique Aqui" id="datebirth" name="datebirth" type="text" class="validate" name="datebirth" required>
                            <label for="datebirth">Data de Nascimento:</label>
                        </div>
                        <!-- Definição Celular -->
                        <div class="input-field col l6 s12">   
                            <input id="cell" type="tel" class="validate pula" name="cell" required>
                            <label for="cell">Celular:</label>
                        </div>
                        <!-- Definição CPF -->
                        <div class="input-field col l6 s12">
                            <input id="cpf" type="text" class="validate pula" name="cpf" required>
                            <label for="CPF">CPF:</label>
                        </div>
                        <!-- Definição RG -->
                        <div class="input-field col l6 s12">
                            <input id="rg" type="text" class="validate pula" name="rg">
                            <label for="RG">RG:</label>
                        </div>
                        <!-- Definição Email -->
                        <div class="input-field col l12 s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="email" type="email" class="validate pula" name="email" required>
                            <label for="email">Email:</label>
                        </div>
                        <!-- Senhas -->
                        <div class="col l7">
                            <!-- Senha Primária -->
                            <div class="input-field col l12 s12">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="password" type="password" class="validate pula" name="password" maxlength="15" autocomplete="off" required>
                                <label for="password">Senha:</label>
                            </div>
                            <!-- Repetir Senha -->
                            <div class="input-field col l12 s12">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="password-rep" type="password" class="validate pula" maxlength="15" autocomplete="off" required>
                                <label for="repetirPassword">Repetir Senha:</label>
                            </div>
                        </div>
                        <!-- Adicionar Foto Usuário -->
                        <div class="col l5 s12 grey lighten-3" style="padding-top:20px;padding-bottom:10px;">
                            <a class="green-text text-darken-2" href="#!">
                                <i class="large material-icons grey-text text-darken-2" style="width:100%;">photo_camera</i> ADICIONAR FOTO
                            </a>
                        </div>
                        <!-- Botão para Logar na Conta -->
                        <div class="col l6 s12 offset-l3">
                            <button class="btn blue darken-2 waves-effect waves-blue z-depth-0" style="width:80%;margin-top:40px;" type="submit" name="register">CADASTRAR
                                <i class="material-icons right green" style="margin-right:-17px;padding-left:10px;padding-right:10px">arrow_forward</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
@endsection

<!-- Import Scripts específico para esta página -->
@push('scripts')
    <script type="text/javascript" src="js/pages/register.js"></script>
@endpush