<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        $email = \filter_input(\INPUT_POST, 'email');
        $senha = \filter_input(\INPUT_POST, 'senha');

        $dados = DB::table('user')->get();

        foreach ($dados as $info) {

            $eml[] = $info->email;
            $pas[] = $info->senha;

            if (\in_array($email, $eml) and \in_array($senha, $pas)) {
                return view('page.admin');
            }
        }

        return \view('page.login', ['dados' => $dados]);
    }
}
