<?php

class ExceptionHandle {
    public static function handle(Throwable $exception) {
        $message = sprintf(
            "Произошла ошибка: %s\nФайл: %s\nСтрока: %d\n\n",
            $exception->getMessage(),
            $exception->getFile(),
            $exception->getLine()
        );
        
        file_put_contents('error.log', $message, FILE_APPEND);
        print($message);
    }
}