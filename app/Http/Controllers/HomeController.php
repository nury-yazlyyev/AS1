<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $cities=City::get();

        return view('home')->with([
            'saherler'=>$cities,
        ]);
    }
}
