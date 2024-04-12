<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(Request $request)
    {
        $Num1 = $request->input('Number1');
        $Num2 = $request->input('Number2');

        session(['Number1'=>$Num1]);

        session(['Number2'=>$Num2]);

        do {
            $gcd = $Num1 % $Num2;
            $Num1 = $Num2;
            $Num2 = $gcd;
        } while ($gcd > 0);

        $ans = $Num1;
        session(['ans'=>$ans]);

        return view('index');
    }
    
    public function show(Request $request)
    {

        $Num1 = session('Number1');
        $Num2 = session('Number2');

        $ans = session('ans');

        echo "$Num1 和 $Num2 的最大公因數為： $ans";
    }
}

