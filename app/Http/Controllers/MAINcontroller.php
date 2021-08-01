<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Client;
use App\Models\DanationRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MAINcontroller extends Controller
{

    public function site(){
        return view('auth.userLogin');
    }
    public function home(Request $request){
        $posts = Post::take(9)->get();
        $bloodTypes = BloodType::all();
        $donations = DanationRequest::take(4)->get();
        $cities = City::all();
        return view('Front.home',compact('posts','bloodTypes','cities','donations'));
    }
}
