<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Illuminate\Support\Facades\Log::info('request_all', [request()->all()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_url', [request()->url()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_header', [request()->header()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_json', [request()->json()]);
    return view('welcome');
});
