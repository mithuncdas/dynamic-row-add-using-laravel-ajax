<?php

namespace App\Http\Controllers;

use App\DemoData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class IndexController extends Controller
{
    public function saveData(){
       $serial =  request()->get('serial');
       $name =  request()->get('name');
       $details =  request()->get('details');
       $price =  request()->get('price');
       $qty =  request()->get('qty');
       $total =  request()->get('price') * request()->get('qty');

      DemoData::create([
        "serial" => $serial,
        "name" => $name,
        "details" => $details,
        "price" => $price,
        "qty" => $qty,
        "total" => $total,
      ]);

            $products = DemoData::all();
            return response()->json([
               
                'view' => view('includes.products', compact('products'))->render()
            ],200);
           
       
       
    }

    public function removeData(){
        $id = request()->get('id');
        DemoData::where('id',$id)->delete();
        $products = DemoData::all();
            return response()->json([
               
                'view' => view('includes.products', compact('products'))->render()
            ],200);
    }
    public function store(Request $request){
        dd($request->all());
    }
}
