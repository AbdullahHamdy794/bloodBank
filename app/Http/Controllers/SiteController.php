<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Queue\MaxAttemptsExceededException;
use Illuminate\Support\Facades\Auth;
use App\Trait\Helper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    use Helper;

///////////////////UserLogin//////////////////

public function UserLogin(){
        return view('auth.userLogin');

    }


    public function checkUser(Request $request){


// Client::where('id','>',0)->update(['password' => bcrypt(123456)]);
        $validate =  $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'

        ]);

        if (Auth::guard('client-web')->attempt($validate)) {
            $request->session()->regenerate();

            return redirect()->intended('post');


        }else{
            return back()->withInput($request->only('email'));
        }



        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);



    }

public function register(){

}


    public function whoAreYOu(){
        return view('Front.who-are-you');
    }
    public function posts(){
        $postss = Post::all();
        return view('Front.posts',compact('postss'));
    }
    public function aboutUs(){
        return view('Front.aboutUs');
    }
    public function donation(){
        return view('Front.donation');
    }
    public function contactUs(){

        return view('Front.contactUs');
    }





    public function create(Request $request)
    {
      $client = Client::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'city_id' => $request['city_id'],
        'd_o_b' => $request['d_o_b'],
        'blood_type_id' => $request['blood_type_id'],
        'last_donation_date' => $request['last_donation_date'],
        'password' => bcrypt($request['password']),
        'api_token'=> Str::random(60),
        'pin_code'=>rand(1111,9999)
      ]);
      if($client){
      return redirect(url('/'));


      }
    }

public function toogleFavourite (Request $request){
    $toggle = $request->user()->favourites()->toggle($request->post_id);
     return $this->apiResponse(1,'success',$toggle);

}

public function sendmessage(Request $request){
    $setting = Contact::create([
        'name'=> $request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'subject'=>$request->subject,
        'message'=>$request->message,
    ]);
    return redirect()->back();
}

}
