<?php

namespace Src\Entity\Shared\Infrastructure\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Src\Entity\Shared\Domain\Exceptions\CustonException;
use Throwable;

final class HandlerException extends ExceptionHandler
{
    // ...

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Throwable $e) {
            if($e instanceof CustonException){
                return response()->json($e->toException(), $e->getCode());
            }
        });
    }
}