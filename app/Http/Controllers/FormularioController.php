<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    function mostrarDados() {//retorna os dados do formulario
        return Formulario::get();
    }
    function inserirDados() {
        Formulario::insert([//estática
            "nome_completo" => "akjdjd",
            "idade"=> 19,
            "sexo" => "masculino"
        ]); 
        return Formulario::get();
    }
    //deletartudo
    function deletartudo() {
        Formulario::whereNotNull("id")->delete();
        return "Deletado com sucesso";
        }
        //inserirdinamico
    function inserirdinamico() {//dinamico
        Formulario::insert([
            "nome_completo" => request("nome_completo","NAO informado"),
            "idade"=> request("idade",01),
            "sexo" => "masculino"
        ]);
        dd(request("nome_completo"));

         
        }
}
