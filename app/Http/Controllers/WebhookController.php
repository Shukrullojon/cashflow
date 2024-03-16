<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\TelegramService;

class WebhookController extends Controller
{
    public function index(Request $request){
        $data = $request->all();
        Webhook::create([
            'request' => json_encode($data),
        ]);
        
        if (isset($data['message'])) {
            $message = $data['message'];
            $chat_id = $message['chat']['id'];
            $text = $message['text'];
            TelegramService::sendMessage($chat_id, $text);
        }
        return true;
    }
}
