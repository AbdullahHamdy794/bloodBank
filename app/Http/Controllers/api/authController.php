<?php

namespace App\Http\controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    private function apiResponse($status,$message,$data){

        $response =['status'=>$status,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response);
    }

public function register(Request $request)
{
   $validator = validator()->make($request->all(),[
       'name'=>'required',
       'phone'=>'required',
       'blood_type_id'=>'required',
       'password'=>'required|confirmed',
       'city_id'=>'required',
       'last_donation_date'=>'required',
       'email'=>'required|unique:clients',
   ]);
   if($validator->fails())
   {
       return $this->apiResponse(0,$validator->errors()->first(),$validator->errors());

   }
   $request->merge(['password'=>bcrypt($request->password)]);
   $client = Client::create($request->all());
   $client->api_token = Str::random(40);
   $client->save();
      return $this->apiResponse(1,'success',[
          'api_token'=>$client->api_token,
          'Client'=>$client,
      ]);

}
public function login(Request $request){
    $validator = validator()->make($request->all(),[

        'phone'=>'required',
        'password'=>'required',

    ]);
    if($validator->fails())
    {
        return $this->apiResponse(0,$validator->errors()->first(),$validator->errors());

    }
$client = Client::where('phone',$request->phone)->first();
if($client)
{
    if(Hash::check($request->password,$client->password)){
        return $this->apiResponse(1,'تم تسجيل الدخول',[
            'api_token'=>$client->api_token,
            'Client'=>$client
        ]);

    }else
    {
    return $this->apiResponse(0,'لا يوجد بيانات','this is false');


    }

}else{
    return $this->apiResponse(0,'لا يوجد بيانات','');

}
}
}
