<?php

namespace App\Exceptions;

use App\Models\ErrorLog;
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
            $data = [
                'file' => $e->getFile(),
                'code' => $e->getCode(),
                'line' => $e->getLine(),
                'message' => $e->getMessage(),
                'log_trace' => $e->getTraceAsString(),
            ];

            $dataArr = [
                'file' => $data['file'],
                'code' => $data['code'],
                'message' => $data['message'],
                'line' => $data['line'],
                'trace' => $data['log_trace']
            ];
            ErrorLog::query()->create($dataArr);
        });
    }
}
