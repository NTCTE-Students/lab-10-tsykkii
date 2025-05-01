<?php

require_once __DIR__ . '/exceptions/CustomException.php';
require_once __DIR__ . '/exceptions/DatabaseConnectionException.php';
require_once __DIR__ . '/handlers/ExceptionHandler.php';

function connectToDatabase($dsn, $username, $password) {
 
    if ($dsn === '') {
        throw new DatabaseConnectionException("Ошибка: DSN не указан");
    }
    throw new DatabaseConnectionException("Ошибка подключения к базе данных с DSN: {$dsn}");
}

try {
    connectToDatabase('', 'user', 'password'); 
} catch (DatabaseConnectionException $e) {
    ExceptionHandler::handle($e);
} catch (Throwable $e) {
    ExceptionHandler::handle($e);
} finally {
    print('Выполнение завершено');
}