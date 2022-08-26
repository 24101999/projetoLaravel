<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admincontroller extends Controller
{
    public function index()
    {
        $title = filter_input(INPUT_POST, 'title');

        if (isset($_POST['send']) && $title) {
            $formatos = array('jpg', 'png', 'svg', 'gif');
            $extencao = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if (in_array($extencao, $formatos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['file']['tmp_name'];
                $newName = uniqid() . ".$extencao";
                $enviar = DB::table('imagens')->insert(['title' => $newName]);
                if (move_uploaded_file($temporario, $pasta . $newName)) {
                    return \redirect('/');
                }
            }
        }

        return \view('page.admin');
    }

    public function pegar()
    {
        $imagens = DB::table('imagens')->get();


        return \view('page.admin', ['imagens' => $imagens]);
    }

    public function delete($id)
    {

        $deletar = DB::table('imagens')->where('id', $id)->delete();
        return \redirect('/');


        return view('page.admin', ['id' => $id, 'deletar' => $deletar]);
    }

    public function update($id)
    {

        $title = filter_input(INPUT_POST, 'title');

        if (isset($_POST['send']) && $title) {
            $formatos = array('jpg', 'png', 'svg', 'gif');
            $extencao = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if (in_array($extencao, $formatos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['file']['tmp_name'];
                $newName = uniqid() . ".$extencao";
                $update = DB::table('imagens')->where('id', $id)->update(['title' => $newName]);
                if (move_uploaded_file($temporario, $pasta . $newName)) {
                    return \redirect('/');
                }
            }
        }
        return view('page.admin', ['id' => $id]);
    }
}