<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('gianadoume.myview');
    }

    public function info(){
        $data = array(
            'name' => 'gabriel',
            'lastname' => 'tsakiridis'
        );
        return view('gianadoume.more-info')->with($data);
    }
}
