<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 2019-03-16
 * Time: 17:30
 */

namespace App\Http\Controllers;


class UserController
{

    public function show($id)
    {
//        global $totos ;

        return view('welcome', ['totos' => $id]);
    }
}