<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Trait\Helper;
use App\Models\Client;
use App\Models\Token;
use App\Trait\Helper as TraitHelper;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    use TraitHelper;


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
public function registerToken(Request $request){
   $validator = validator([
       'token'=>'required',
       'platform'=>'required',

   ]);
   if($validator->fails())
   {
       $data = $validator->errors();
       return $this->apiResponse(0,$validator->errors()->first(),$data);
   }
   Token::where('token',$request->token)->delete();
   $request->user()->tokens->create($request->all());
}
public function removeToken(Request $request){
    $validator = validator([
        'token'=>'required'
    ]);
    if($validator->fails())
    {
        $data = $validator->errors();
        return $this->apiResponse(0,$validator->errors()->first(),$data);
    }
    Token::where('token',$request->token)->delete();
    return $this->apiResponse(1,'deleted token succesfully',$validator);

}
}
