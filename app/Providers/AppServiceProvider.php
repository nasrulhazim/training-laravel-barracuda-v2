<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response as HttpResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        HttpResponse::macro('api', function ($data = null, $message = null, $status = true, $code = 200) {
            return response()->json([
                'data'    => $data,
                'message' => $message,
                'status'  => $status,
                'code'    => $code,
            ], $code);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
