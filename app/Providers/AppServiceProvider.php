<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($data = [], $message = '') {
            return response()->make([
                'status' => true,
                'data' => $data,
                'message' => $message
            ]);
        });
        Response::macro('error', function ($error = null, $message = '', $status_code = 400) {
            return response()->make([
                'status' => false,
                'error' => $error,
                'message' => $message,
            ], $status_code);
        });
    }
}
