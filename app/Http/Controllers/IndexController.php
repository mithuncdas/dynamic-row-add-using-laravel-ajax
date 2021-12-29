<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function store(Request $request){
        $array = $request->get('serial');

        dd($array);
    }
}
