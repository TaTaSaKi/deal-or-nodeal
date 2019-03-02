<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas=[
            [
                'id' => '1',
                'name' => 'Apple',
                'description' => 'Welcome Apple !',
            ],
            [
                'id' => '2',
                'name' => 'Samsung',
                'description' => 'Welcome Samsung !',
            ],
            [
                'id' => '3',
                'name' => 'Sony',
                'description' => 'Welcome Sony !',
            ],
        ];
        return view('index', compact('datas'));
    }
}
