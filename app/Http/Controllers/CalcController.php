<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Break_;

class CalcController extends Controller
{
    public function calcs($num01, $ope, $num02)
    {

        if (! (is_numeric($num01)) || ! (is_numeric($num02))) {
            $result = '数字を入力してください。';
        } else {

            switch ($ope) {
                case 'addition':
                    $result = $num01 + $num02;
                    break;
                case 'subtraction':
                    $result = $num01 - $num02;
                    break;
                case 'multiplication':
                    $result = $num01 * $num02;
                    break;
                case 'division':
                    if ($num02 == 0) {
                        $result = '0で割ってはいけません！';
                    } else {
                        $result = $num01 / $num02;
                        break;
                    }
                default:
                    $result = '演算子はaddition、subtraction、multiplication、divisionのいずれかを入力してください。';
            }
        }

        return view('calcs', [
            'result' => $result
        ]);
    }
}
