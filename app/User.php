<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\resetSenha;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','lastname','sex','cep','bairro','city','uf','address','number','datebirth','cell','cpf','rg', 'email','password','image',
    ];


   public function sendPasswordResetNotification($token)
   {
       $this->notify(new resetSenha($token));
   }

}
