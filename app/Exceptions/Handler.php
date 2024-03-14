<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function report(Throwable $e)
    {
        \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot7163412262:AAEe4_eAyM42zgYS9zegoGBZ_aRiGiDztqg/sendMessage',[
            'chat_id' => 789526554,
            'text' => $e->getMessage(),
            'parse_mode' => 'html'
        ]);
    }
}
