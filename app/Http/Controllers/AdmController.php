<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Denuncias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    function login()
    {
        return view('login');
    }

    function loginPost()
    {
        $auth = Auth::attempt([
            'email' => request('email'),
            'password' => request('senha')
        ]);

        // echo auth()->user()->password;
        if ($auth) {
            return redirect('/denuncias');
        } else {
            return redirect('/');
        }
    }

    function cadastro()
    {
        return view('cadastro');
    }

    function cadastroPost()
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        return redirect('/');
    }

    function denuncias()
    {
        $dados = Denuncias::get()->toArray();
        return view('denuncias', compact('dados'));
    }

    function novaDenuncia()
    {
        return view('nova-denuncia');
    }

    function novaDenunciaPost()
    {
        $create = Denuncias::create([
            'caminho_foto' => 'https://picsum.photos/200',
            'situacao' => 'Em análise',
            'endereco' => request('endereco')
        ]);

        return redirect('/denuncias');
    }

    function deletarDenuncia($id)
    {
        $delete = Denuncias::where('id', $id)->delete();
        return redirect('/denuncias');
    }

    function concluirDenuncia($id)
    {
        $update = Denuncias::where('id', $id)->update([
            'situacao' => 'Concluído'
        ]);
        
        return redirect('/denuncias');
    }
}
