<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Mail\Reset;
use App\Models\BloodType;
use App\Models\Category;
use App\Models\City;
use App\Models\Client;
use App\Models\Contact;
use App\Models\DanationRequest;
use App\Models\Governorate;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Token;
use App\Trait\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\AssignOp\Concat;

class mainController extends Controller
{
    use Helper;


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

   function smsMisr($to, $message)
   {
       $url = 'https://smsmisr.com/api/webapi/?';
       $push_payload = array(
           "username" => "*****",
           "password" => "*****",
           "language" => "2",
           "sender" => "ipda3",
           "mobile" => '2' . $to,
           "message" => $message,
       );

       $rest = curl_init();
       curl_setopt($rest, CURLOPT_URL, $url.http_build_query($push_payload));
       curl_setopt($rest, CURLOPT_POST, 1);
       curl_setopt($rest, CURLOPT_POSTFIELDS, $push_payload);
       curl_setopt($rest, CURLOPT_SSL_VERIFYPEER, true);  //disable ssl .. never do it online
       curl_setopt($rest, CURLOPT_HTTPHEADER,
           array(
               "Content-Type" => "application/x-www-form-urlencoded"
           ));
       curl_setopt($rest, CURLOPT_RETURNTRANSFER, 1); //by ibnfarouk to stop outputting result.
       $response = curl_exec($rest);
       curl_close($rest);
       return $response;
   }

    public function governorate(){
        $governorate = Governorate::all();
        return $this->apiResponse(1,'success',$governorate);

    }
    public function bloodType(){
        $bloodType = BloodType::all();
        return $this->apiResponse(1,'success',$bloodType);

    }
    public function createDonationRequest(Request $request){
        $validator = validator()->make($request->all(),[
            'patient_name'=>'required',
            'patient_phone'=>'required',
            // 'city_id'=>'required',
            'hospital_name'=>'required',
            'details'=>'required',
            'letitude'=>'required',
            'longitude'=>'required',
            'bags_num'=>'required',


        ]);
        if($validator->fails())
        {
            return $this->apiResponse(0,$validator->errors()->first(),$validator->errors());

        }

        $donationRequest = $request->user()->Requests()->create($request->all());


     $clientids = $donationRequest ->City->governorate-> clients()
     ->whereHas('BloodTypes',function($q)use($request){$q->where('blood_types.id',$request->blood_type_id);
  })->pluck('clients.id')->toArray();


if(count($clientids))
{
$notification = $donationRequest->Notification()->create([
'tittle'=>'احتاج متبرع لفصيله',
'content'=>'احتاج متبرع لفصيله والحاله حرجه',
]);

$notification->clients()->attach($clientids);
$tokens = Token::whereIn('client_id',$clientids)->where('token_id','!=',null)->pluck('token')->toArray();
if(count($tokens)){
$this->notifyByFirebase($notification->title,$notification->content,$tokens,[
    'donation' => $donationRequest
]);
}
}




return $this->apiResponse(1,'تم الاضافه بنجاح',$donationRequest);

}







public function createGonvernorate (Request $request){
    $validator = validator([
        'name'=>'required',
    ]);
    if($validator->fails())
    {
        return $this->apiResponse(0,$validator->errors(),$validator);
    }
    $createGovernorate = Governorate::create($request->all());

    return $this->apiResponse(1,'success',$validator);

}


public function createCity (Request $request){
    $validator = validator([
        'name'=>'required',
        'governorates_id'=>'required',
    ]);
    if($validator->fails())
    {
        return $this->apiResponse(0,$validator->errors(),$validator);
    }
    $createGovernorate = City::create($request->all());

    return $this->apiResponse(1,'success',$validator);

}


    public function category(){
        $category = Category::all();
        return $this->apiResponse(1,'success',$category);

    }

    public function notifications(){
        $notification = Notification::all();
        return $this->apiResponse(1,'success',$notification);

    }
    public function setting(Request $request){
        $setting = Setting::create($request->all());
        return $this->apiResponse(1,'This contstaint Setting',$setting);

    }
    public function  contacts(){
        $contacts = Contact::all();
        return $this->apiResponse(1,'This contstaint Setting',$contacts);

    }
    public function update(Request $request){
     $update = Notification::find($request->id);
     $update->tittle = $request->tittle;
     $update->content = $request->content;
     $update->donation_request_id = $request->donation;
     $update->save();
     return $this->apiResponse(1,'تم التعديل بنجاح',$update);
    }
public function resetPassword(Request $request){
     $user = Client::where('phone',$request->phone)->first();
     if($user)
     {
         $code = mt_rand(1111,9999);
         $updatepin = $user->update(['pin_code'=>$code]);
         if($updatepin){
        // $this->smsMisr($request->phone,"your ResetCode is".$code);

            Mail::to($user->email)
            ->bcc("abdullahhamdy29@gmail.com")
            ->send(new Reset($code));
            return $this->apiResponse(1,'success','');

        }else{
            return $this->apiResponse(0,'mistake','');
        }
     }

    }

    public function editprofile(Request $request){
        $update = Client::updateOrCreate($request->all());
        return $this->apiResponse(1,'success',$update);

    }

    public function donationRequest(){
        $donation = DanationRequest::paginate(10);
        return $this->apiResponse(1,'success',$donation);
    }



    public function posts(){
        $post = Post::all();
        return $this->apiResponse(1,'success',$post);

    }



    public function cities(Request $request)
    {
        $cities = City::where(function($query)use($request){
            if($request->has('governorates_id'))
            {
                $query->where('governorates_id',$request->governorates_id);

            }
        })->get();
        return $this->apiResponse(1,'success',$cities);

    }

    public function postFavourite(Request $request){
$rules =[
    'post_id'=>'required|exists:posts,id',
];
$validator = validator()->make($request->all(),$rules);
if($validator->fails())
{
    return $this->apiResponse(0,$validator->errors()->first(),$validator->errors());
}
$toggle = $request->user()->favourites()->toggle($request->post_id);
return $this->apiResponse(1,'success',$toggle);


    }
    public function favouriteMe(Request $request)
    {
        $post = $request->user()->favourites()->latest()->paginate(2);
        return $post;
    }
public function verifNew(Request $request){
    $validator = validator([
        'api_token'=>'required',
        'email'=>'required',
    ]);
    if($validator->fails())
    {
        return $this->apiResponse(0,$validator->errors()->first(),'');
    }
    else{
        $token = $request->api_token;
        return view('auth.passwords.resetnew')->with(
            ['token' => $token, 'email' => $request->email]
        );

    }
}
public function notificationSetting(Request $request){

    $request ->user()-> governorates()->attach($request->governorates);
    $request ->user()-> bloodTypes()->attach($request->BloodTypes);
return $this->apiResponse(1,'success','');
}

public function newPass(Request $request){


  $validator = validator()->make($request->all(),[
   'phone'=>'required',
    'password'=>'required',
    'pin_code'=>'required'
          ]);

if($validator->fails()){
     return $this->apiResponse(0,$validator->errors(),$validator->errors()->first());
    }

$client = Client::where('phone',$request->phone)->first();
if($client){
    if($client->pin_code==$request->pin_code)
    {
        $client->update([
            'password'=>$request->password
        ]);
        return $this->apiResponse(1,'success','تم الحفظ بنجاح');

        }
    }else{

    }
}




}

