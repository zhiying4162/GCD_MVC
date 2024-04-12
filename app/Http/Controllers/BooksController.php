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

        $this->Forloop($Num1, $Num2);
        $this->Recursion($Num1, $Num2);

        return view('index');
    }

    public function Forloop($Num1,$Num2)
    {
        // 迴圈
        do {
            $gcd = $Num1 % $Num2;
            $Num1 = $Num2;
            $Num2 = $gcd;
        } while ($gcd > 0);

        $ans = $Num1;
        session(['ans'=>$ans]);
    }

    public function Recursion($Num1,$Num2)
    {
        // 遞迴
        if($Num2==0){
           $ans_R = $Num1;
           session(['ans_R'=>$ans_R]);
        }
        else {
            $this->Recursion($Num2, $Num1 % $Num2);
        }
    }
    
    public function show(Request $request)
    {
        $Num1 = session('Number1');
        $Num2 = session('Number2');

        // 迴圈
        $ans = session('ans');

        // 遞迴
        $ans_R = session('ans_R');

        echo "迴圈<br>";
        echo "$Num1 和 $Num2 的最大公因數為： $ans";
        echo "<hr>";
        echo "遞迴<br>";
        echo "$Num1 和 $Num2 的最大公因數為： $ans_R";
    }
    
}

