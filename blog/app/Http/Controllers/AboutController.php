<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $var1 = 'gianadoumeeeeee!!';
        return view('gianadoume.myview', compact('var1'));
    }

    public function info(){
        $data = array(
            'name' => 'gabriel',
            'lastname' => 'tsakiridis',
            'other' => ['age' => 45, 'gender' => 'male', 'body' =>['weight' => 70, 'height'=>186]]
        );
        return view('gianadoume.more-info')->with($data);
    }
}
