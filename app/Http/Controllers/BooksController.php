<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// session_start();
// class indexControllers extends Controller
// {
//     //
//     public function index(){
//         return view('index');
//     }

//     public function calculate(Request $request){
        // $Num1 = $request->$_POST['Number1'];
        // $Num2 = $request->$_POST['Number2'];

//         do{
//             $gcd = $Num1 % $Num2;
//             $Num1 = $Num2;
//             $Num2 = $gcd;
//         }
//         while($gcd>0);
        
//         $request->session()->put('gcd_result', $Num1);

//         return view('index');
//     }
    
//     public function show(Request $request)
//     {
//         // 获取计算结果
//         $gcdResult = $request->session()->get('gcd_result');

//         // 返回视图，并将计算结果传递给视图
//         return view('show', ['gcdResult' => $gcdResult]);
//     }
// }


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

        // session(['Number1'=>$Num1]);

        // if(!session()->has('Number1')){           
        //     session(['Number1'=>$Num1]);
        // }
        // if(!session()->has('Number2')){           
        //     session(['Number2'=>$Num2]);
        // }

        do {
            $gcd = $Num1 % $Num2;
            $Num1 = $Num2;
            $Num2 = $gcd;
        } while ($gcd > 0);

        $ans = $Num1;
        session(['ans'=>$ans]);

        // $request->session()->put('gcd_result', $Num1);

        // return redirect()->route('index');
        return view('index');
    }
    
    public function show(Request $request)
    {
        // $gcdResult = $request->session()->get('gcd_result');

        // return view('index', ['gcdResult' => $gcdResult]);

        $Num1 = session('Number1');
        $Num2 = session('Number2');

        $ans = session('ans');

        echo "$Num1 和 $Num2 的最大公因數為： $ans";
    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class IndexController extends Controller
// {
//     //
//     public function index()
//     {
//         return view('index');
//     }

//     public function calculate(Request $request)
//     {
//         $num1 = $request->input('Number1');
//         $num2 = $request->input('Number2');

//         // 计算最大公约数
//         $gcd = $this->calculateGCD($num1, $num2);

//         // 将计算结果存入会话
//         $request->session()->put('gcd_result', $gcd);

//         // 重定向到主页
//         return redirect()->route('index');
//     }
    
//     public function show(Request $request)
//     {
//         // 获取计算结果
//         $gcdResult = $request->session()->get('gcd_result');

//         // 返回视图，并将计算结果传递给视图
//         return view('index', ['gcdResult' => $gcdResult]);
//     }

//     // 计算最大公约数的方法
//     private function calculateGCD($a, $b)
//     {
//         while ($b != 0) {
//             $remainder = $a % $b;
//             $a = $b;
//             $b = $remainder;
//         }
//         return $a;
//     }
// }
