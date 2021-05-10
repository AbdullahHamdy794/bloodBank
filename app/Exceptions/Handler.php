<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{

    private function apiResponse($status,$message,$data){

        $response =['status'=>$status,
        'message'=>$message,
        'data'=>$data,
    ];
    return response()->json($response);
    }


    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

protected function unauthenticated($request, AuthenticationException $exception)
{
    return $request->expectsJson()
    ?$this->apiResponse(0,'Unauthenticated.','')
    :redirect()->guest($exception->redirectTo()??route('login'));

}

}
