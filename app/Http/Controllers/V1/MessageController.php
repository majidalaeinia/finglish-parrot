<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    public function slugify(Request $request)
    {
        $chatText = $request->new_chatbot_message['text'];
        $slugifiedText = Str::slug($chatText, ' ');
        $conversationId = $request->new_chatbot_message['conversation']['id'];;
        $body = [
            "type" => "TEXT",
            "text_message" => $slugifiedText,
            "buttons" => [
                "rows" => [
                    [
                        "buttons" => [
                            [
                                "action" => [
                                    "open_direct_link" => "https://google.com"
                                ],
                                "icon_name" => "REAL_STATE",
                                "caption" => "متن دکمه"
                            ],
                            [
                                "action" => [
                                    "open_server_link" => [
                                        "data" => [
                                            "my_key_1" => "value",
                                            "my_key_2" => "value2"
                                        ]
                                    ]
                                ],
                                "icon" => "HOME",
                                "caption" => "متن دکمه"
                            ]
                        ]
                    ]
                ]
            ]
        ];

        Log::info($chatText);
        Log::info($conversationId);

        Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Api-Key' => config('auth.divar_x_api_key')
        ])->post("https://api.divar.ir/experimental/open-platform/chat/bot/conversations/$conversationId/messages", $body);

        return response()->noContent();
    }
}
