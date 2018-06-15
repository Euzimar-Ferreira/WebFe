<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\administration as Authenticatable;
use App\Notifications\resetSenha;

class Administration extends Authenticatable
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