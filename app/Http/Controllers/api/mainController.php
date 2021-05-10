<?php

namespace App\Http\controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\Category;
use App\Models\City;
use App\Models\Client;
use App\Models\Contact;
use App\Models\DanationRequest;
use App\Models\Governorates;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class mainController extends Controller
{
    private function apiResponse($status,$message,$data){
        $response =['status'=>$status,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response);
    }


    public function governorate(){
        $governorate = Governorates::all();
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
            'city_id'=>'required',
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

        $clientRequest = DanationRequest::create($request->all());
        return $this->apiResponse(1,'تم الاضافه بنجاح',$clientRequest);

    }

    public function category(){
        $category = Category::all();
        return $this->apiResponse(1,'success',$category);

    }

    public function notifications(){
        $notification = Notification::all();
        return $this->apiResponse(1,'success',$notification);

    }
    public function setting(){
        $setting = Setting::all();
        return $this->apiResponse(1,'This contstaint Setting',$setting);

    }
    public function  contacts(){
        $contacts = Contact::all();
        return $this->apiResponse(1,'This contstaint Setting',$contacts);

    }
    public function update(Request $request){
     $data = Notification::find($request->id);
     $data->tittle = $request->tittle;
     $data->content = $request->content;
     $data->donation_request_id = $request->donation;
     $data->save();
     return $this->apiResponse(1,'تم التعديل بنجاح',$data);

    }
    public function editprofile(Request $request){
        $update = Client::updateOrCreate($request->all());
        return $this->apiResponse(1,'success',$update);

    }

    public function donationRequest(){
        $donation = DanationRequest::all();
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
}
