<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        if (strpos($operator, 'addition') !== false) {
            $answer = $num1 + $num2;
        } elseif (strpos($operator, 'subtraction') !== false) {
            $answer = $num1 - $num2;
        } elseif (strpos($operator, 'multiplication') !== false) {
            $answer = $num1 * $num2;
        } elseif (strpos($operator, 'division') !== false) {
            $answer = $num1 / $num2;
        } else {
            $answer = "";
        }

        return view(
            'calc',
            [
                'answer' => $answer
            ]
        );
    }
}
