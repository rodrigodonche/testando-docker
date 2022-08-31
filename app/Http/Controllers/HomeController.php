<?php

namespace App\Http\Controllers;

use App\Soma;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class HomeController
{
    public function formSoma()
    {
        try {
            $somas = Soma::all();
            return view('home', compact('somas'));
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

            $s = new Soma();
            $s->numero1 = $numero1;
            $s->numero2 = $numero2;
            $s->soma = $soma;
            $s->save();

            return redirect()->route('formSoma');
        }
        catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
