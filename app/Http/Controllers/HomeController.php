<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(Request $request)
    {
        $first_name = $request->post('first_name') ?: '';
        $last_name = $request->post('last_name') ?: '';
        return view('welcome', [
            'first_name' => $first_name,
            'last_name' => $last_name
        ]);
    }
}
