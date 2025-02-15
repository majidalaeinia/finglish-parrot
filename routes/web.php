<?php

use App\Http\Middleware\V1\DivarAuthenticationMiddleware;
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


Route::middleware(DivarAuthenticationMiddleware::class)->post('/', function () {
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('now', [now()]);
    \Illuminate\Support\Facades\Log::info('request_all', [request()->all()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_url', [request()->url()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_header', [request()->header()]);
    \Illuminate\Support\Facades\Log::info('--------------------------------');
    \Illuminate\Support\Facades\Log::info('request_json', [request()->json()]);

    return response()->json([
        'status' => '200',
        'message' => 'success',
        'url' => 'https://shining-gorilla-extremely.ngrok-free.app'
    ], 200);
});
