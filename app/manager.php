<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\manager as Authenticatable;
use App\Notifications\resetSenha;

class Manager extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','lastname','sex','cep','bairro','city','uf','address','number','datebirth','cell','cpf','rg', 'email','password','image', 'type'
    ];

    protected $dates = [
        'datebirth'
    ];
   public function sendPasswordResetNotification($token)
   {
       $this->notify(new resetSenha($token));
   }

}