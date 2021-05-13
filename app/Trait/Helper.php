<?php

namespace App\Trait;


trait Helper{


    public  function apiResponse($status,$message,$data){
        $response =['status'=>$status,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response);
    }
}
