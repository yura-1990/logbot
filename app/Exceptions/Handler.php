<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Telegram\Bot\Laravel\Facades\Telegram;

class Handler extends ExceptionHandler
{
    public $showOne = true;
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

            if ($this->shouldReport($e) && $this->showOne) {
                $message = "Критическая ошибка: " . $e->getMessage();
                Telegram::sendMessage([
                    'chat_id' => config('app.telegram_chat_id'),
                    'text' => $message,
                ]);

                $this->showOne = false;
            }
        });
    }
}
