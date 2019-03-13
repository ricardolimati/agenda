<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    public function index(){
        $list_pessoas = Pessoas::all();
        return view('pessoas.index', [
            'pessoas' => $list_pessoas
        ]);
        return true;
    }

}
