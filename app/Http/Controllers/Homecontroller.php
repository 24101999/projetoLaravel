<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Homecontroller extends Controller
{
    public function index()
    {

        $items = DB::table('imagens')->get();

        return view('page.home', ['items' => $items]);
    }
}