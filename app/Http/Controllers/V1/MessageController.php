<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\MessageSlugifyRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    public function slugify(MessageSlugifyRequest $request): JsonResponse
    {
        \Illuminate\Support\Facades\Log::info('request_all', [request()->all()]);
        \Illuminate\Support\Facades\Log::info('--------------------------------');
        \Illuminate\Support\Facades\Log::info('request_url', [request()->url()]);
        \Illuminate\Support\Facades\Log::info('--------------------------------');
        \Illuminate\Support\Facades\Log::info('request_header', [request()->header()]);
        \Illuminate\Support\Facades\Log::info('--------------------------------');
        \Illuminate\Support\Facades\Log::info('request_json', [request()->json()]);
        $slugifiedMessage = Str::slug($request->message);

        return response()->json([
            'slugified_message' => $slugifiedMessage
        ], 200);
    }
}
