<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function register(Request $request)
    {
        $dados = $request->all();

        event(new Registered($user = $this->create($dados)));
        
        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        $result = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'sex' => $data['sex'],
            'cep' => $data['cep'],
            'bairro' => $data['bairro'],
            'city' => $data['city'],
            'uf' => $data['uf'],
            'address' => $data['address'],
            'number' => $data['number'],
            'datebirth' => $data['datebirth'],
            'cell' => $data['cell'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $data['image'],
        ]);
        //$result = User::create($dados);
        /* $result = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'sex' => $data['sex'],
            'cep' => $data['cep'],
            'bairro' => $data['bairro'],
            'city' => $data['city'],
            'uf' => $data['uf'],
            'address' => $data['address'],
            'number' => $data['number'],
            'datebirth' => $data['datebirth'],
            'cell' => $data['cell'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'email' => $data['email'],
            'password' => $data['password'],
            'image' => $data['image'],
        ]); */
            return $result;
    }

    


}
