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
        $slugifiedMessage = Str::slug($request->message);

        return response()->json([
            'slugified_message' => $slugifiedMessage
        ], 200);
    }
}
