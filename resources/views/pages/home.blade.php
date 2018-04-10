@extends('layouts.page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body style="padding:40px">
TELA HOME FOI INICIADA COM SUCESSO
    <div>
       Seja bem vindo, {{$user}}
    </div>
    <form id="form-logout" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>

    <img src="/storage/avatarUser/{{$avatar}}" whidth="100px" height="100px" alt="Foto de Perfil">
    <br/>
    <button class="btn" onclick="document.getElementById('form-logout').submit()">SAIR</button>
    
</body>
</html>

