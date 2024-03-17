<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Webhook;
use App\Services\TelegramService;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        Webhook::create([
            'request' => json_encode($data),
        ]);

        if (isset($data['message'])) {
            $text = $data['message']['text'] ?? null;
            if ($text == "/start") {
                $this->start_command($data);
                return true;
            } else if ($text == "/profile") {
                return true;
            } else {
                $user = User::where('chat_id', $data['message']['chat']['id'])->first();
                if (empty($user)){
                    TelegramService::sendMessage($data['message']['chat']['id'], 'Botda muammo kuzatildi!', null);
                    return true;
                } else if ($user->step == 1) {
                    $this->enter_name($data, $user);
                } else if ($user->step == 2) {
                    $this->enter_phone($data, $user);
                }else if ($user->step == 0){
                    TelegramService::sendMessage($data['message']['chat']['id'], 'Aniqlanmagan buyruq!', null);
                    return true;
                }
            }
        }
        return true;
    }

    public function start_command($data)
    {
        $user = User::where('chat_id', $data['message']['chat']['id'])->first();
        if (!empty($user)) {
            TelegramService::sendMessage($data['message']['chat']['id'], 'Main Page!', null);
        } else {
            User::create([
                'chat_id' => $data['message']['chat']['id'],
                'first_name' => $data['message']['chat']['first_name'] ?? '',
                'last_name' => $data['message']['chat']['last_name'] ?? '',
                'username' => $data['message']['chat']['username'] ?? '',
                'step' => 1,
            ]);
            TelegramService::sendMessage($data['message']['chat']['id'], 'Enter Name!', null);
        }
        return true;
    }

    public function enter_name($data, $user)
    {
        $user->update([
            'name' => $data['message']['text'],
            'step' => 2,
        ]);
        TelegramService::sendMessage($data['message']['chat']['id'], 'Enter Phone', json_encode($this->contact));
        return true;
    }

    public function enter_phone($data, $user)
    {
        $user->update([
            'phone' => $data['message']['contact']['phone_number'],
            'step' => 0,
        ]);
        TelegramService::sendMessage($data['message']['chat']['id'], 'Main Page', null);
        return true;
    }

    public $contact = [
        'keyboard' => [
            [
                [
                    'text' => "SEND PHONE NUMBER",
                    'request_contact' => true
                ]
            ]
        ],
        'one_time_keyboard' => true,
        'resize_keyboard' => true
    ];
}
