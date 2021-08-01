<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MAinController extends Controller
{

    public function home(){
        return view('Front.home');
    }
}
