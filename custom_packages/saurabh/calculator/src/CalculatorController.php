<?php

namespace Saurabh\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        $result = $a + $b;

        return view('calculator::result')->with('result', $result);
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;

        return view('calculator::result')->with('result', $result);
    }
}
