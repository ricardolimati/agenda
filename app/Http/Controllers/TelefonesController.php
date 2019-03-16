<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelefonesController extends Controller
{
    public function store($telefone)
    {
        try{
            $telefone->save();
        }catch (\Exception $e){
            return "ERRO: " . $e->getMessage();
        }
    }
}
