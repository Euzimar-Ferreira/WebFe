<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Carbon;

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

        $nameFile = $this->importFile($dados, $request);

        if ($nameFile == null) {
           return redirect()->back()->with('error','O sistema encontrou Falhas ao Importar a Imagem');
        }
        
        $dados['image'] = $nameFile;

        event(new Registered($user = $this->create($dados, $request)));
        
        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function create(array $data,Request $request)
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
            'datebirth' => Carbon::createFromFormat('d/m/Y', $data['datebirth']),
            'cell' => $data['cell'],
            'cpf' => $data['cpf'],
            'rg' => $data['rg'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image' => $data['image'],
        ]);
            return $result;
    }

    protected function importFile(array $data, Request $request)
    {
        //Criar nome para novo arquivo de imagem: Avatar do Usuário
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $name = ((User::max('id'))+1).'-'.$data['name'];
            $extension = $request->image->extension();
            $nameFile = "{$name}.{$extension}";
            if ($extension != 'png' && $extension != 'jpg') {
                return null;
            } else {
                $upload = $request->image->storeAs('avatarUser',$nameFile);
                
                if(!$upload)
                    return null;
    
            }
            
        } else {
            $name = 'default';
            $extension = 'png';
            $nameFile = "{$name}.{$extension}";
        }
        
        return $nameFile;
    }

}
