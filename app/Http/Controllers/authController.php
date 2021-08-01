<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Governorate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register(){
        $governorate = Governorate::all();
        $bloodTypes = BloodType::all();
        $cities = City::all();
        return view('Front.register',compact('governorate','cities','bloodTypes'));


    }

}
