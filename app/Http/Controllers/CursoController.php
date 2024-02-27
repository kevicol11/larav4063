<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function es_primo($num1){
        for ($i = 2; $i < $num1; $i++){
            if (($num1 % $i)== 0){
            return'no es primo';
        }
        return ' es primo';
    }
}
}