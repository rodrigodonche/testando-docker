<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class HomeController
{
    public function formSoma()
    {
        try {
            return view('home');
        }
        catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function soma(Request $request)
    {
        try {
            $numero1 = (integer) $request->numero1;
            $numero2 = (integer) $request->numero2;
            $soma = $numero1 + $numero2;
            $resposta = array();
            array_push($resposta, $numero1);
            array_push($resposta, $numero2);
            array_push($resposta, $soma);
            return view('home', compact('resposta'));
        }
        catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
