<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Throwable $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        /*
                if ($request->expectsJson()) {
                    return response()->json(['error' => 'Unauthenticated.'], 401);
                }
                if ($request->is('admin') || $request->is('admin/*')) {
                    return redirect()->guest('/admin/login');
                }




               if ($request->is('web') || $request->is('user/*')){
                    return redirect()->guest('/login/user');
                }
                return redirect()->guest(route('login'));
            }
        */


        return parent::render($request, $exception);


    }


    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if($request->expectsJson()){
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
        $guard = Arr::get($exception->guards(),0);
        switch ($guard){
            case 'admin':
                $login = 'auth/admin/login';
                break;
            default:
                $login = 'login';
        }
        return redirect()->guest($login);

    }



}