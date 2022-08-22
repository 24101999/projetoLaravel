<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{
    public function index()
    {

        $email = \filter_input(\INPUT_POST, 'email');
        $senha = \filter_input(\INPUT_POST, 'senha');

        if ($email & $senha) {
            $cadastrar = DB::table('user')->insert(['email' => $email, 'senha' => $senha]);
            return \redirect('/admin');
        }

        return \view('page.cadastro', ['email' => $email, 'senha' => $senha]);
    }
}