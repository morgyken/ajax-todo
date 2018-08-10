<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = ItemModel::all();

        return view('home',['item' => $item]);
    }


    public function show()
    {
              return view('showme');
    }
}
