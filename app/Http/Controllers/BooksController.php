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
        // 迴圈
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

    public function Recursion(Request $request)
    {
        // 遞迴
        $Num1_R = $request->input('Number1');
        $Num2_R = $request->input('Number2');

        session(['Number1'=>$Num1_R]);
        session(['Number2'=>$Num2_R]);

        if($Num2_R==0){
           $ans_R = $Num1_R;
        }
        return Recursion($Num2_R , $Num1_R % $Num2_R);
        session(['ans'=>$ans_R]);

        return view('index');
    }
    
    public function show(Request $request)
    {
        // 迴圈
        $Num1 = session('Number1');
        $Num2 = session('Number2');
        $ans = session('ans');

        // 遞迴
        $Num1_R = session('Number1');
        $Num2_R = session('Number2');
        $ans_R = session('ans');

        echo "迴圈<br>";
        echo "$Num1 和 $Num2 的最大公因數為： $ans";
        echo "<hr>";
        echo "遞迴<br>";
        echo "$Num1_R 和 $Num2_R 的最大公因數為： $ans_R";
    }
    
}

