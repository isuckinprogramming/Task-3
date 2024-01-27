<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $parameterVar = ["somevar" => "contents from variables passed as a parameter."];
        return view('something',$parameterVar);
    }

    public function show($param)
    {

    return ["text" => "this is a string containing $param", "this is a json" => "php styled json"];

    }
}
