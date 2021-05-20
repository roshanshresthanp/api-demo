<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;


use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// use App\Exceptions\NotFoundHttpException;

use Illuminate\Http\Response;


class Handler extends ExceptionHandler
{
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
        $this->renderable(function (NotFoundHttpException $e, $request) {
            return response()->json([
                'error' => 'Invalid route'], Response::HTTP_NOT_FOUND);
        });
        
    }

 /*    public function render($request, Exception $exception)
    {
        // if($request->expectsJson()){
        //     if($exception instanceof ModelNotFoundException) {
        //         return response()->json([
        //             'errors' => 'Product Model not found'
        //         ],Response::HTTP_NOT_FOUND);
        //     }
        // }
    
        if($request->expectsJson()){
                if($exception instanceof NotFoundHttpException) {
                    return response()->json([
                        'errors' => 'Incorect route'
                    ],Response::HTTP_NOT_FOUND);
                }
            }
        }
**/

}
