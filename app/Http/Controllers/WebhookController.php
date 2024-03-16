<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebhookController extends Controller
{
    public function index(Request $request){
        Webhook::create([
            'request' => json_encode($request->all(),true),
        ]);
        return true;
    }
}
