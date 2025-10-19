<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    function index() {
        $text = 'abaabbcccaabaaccc';
        $arr_kalimat = explode (",",$text);
        $arr = str_split($text);
        $array_kosong = [];
        $data = [];
        $a = 0; 
        for ($i=0; $i < strlen($text); $i++) {
            if($i != 0 && $arr[$i-1] != $arr[$i] && $i !=  strlen($text)){
                $data += [ $text[$i-1] => $a ];
                array_push($array_kosong, $a);
                echo '<br>'.$arr[$i-1].' = '.$a;
                $a = 0;
            } 
            $a++;
            if ($i ===  strlen($text)-1) {
                $data += [ $text[$i-1] => $a ];
                array_push($array_kosong, $a);
                echo '<br>'.$arr[$i-1].' = '.$a;
                $a = 0;
            }
        }
        // array_push($stack, "apple", "raspberry");
        // $a='aaaabbbcccaac';
        // Contoh Output
        // a = 4
        // b = 3
        // c = 3
        // a = 2
        // c = 1
    }
}
