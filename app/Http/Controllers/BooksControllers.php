<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();
class indexControllers extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function calculate(Request $request){
        $Num1 = $request->$_POST['Number1'];
        $Num2 = $request->$_POST['Number2'];

        do{
            $gcd = $Num1 % $Num2;
            $Num1 = $Num2;
            $Num2 = $gcd;
        }
        while($gcd>0);
        
        $request->session()->put('gcd_result', $Num1);

        return view('index');
    }
    
    public function show(Request $request)
    {
        // 获取计算结果
        $gcdResult = $request->session()->get('gcd_result');

        // 返回视图，并将计算结果传递给视图
        return view('show', ['gcdResult' => $gcdResult]);
    }
}
