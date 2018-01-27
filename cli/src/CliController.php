<?php

namespace taytus\cli;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CliController extends Controller{
//
    public function add($a, $b){
        $result= $a + $b;
        return view('cli::add', compact('result'));

    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}