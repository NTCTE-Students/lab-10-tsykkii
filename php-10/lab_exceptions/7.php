<?php
require_once 'exceptions/CustomException.php';
require_once 'exceptions/DatabaseException.php';
require_once 'handlers/ExceptionHandler.php';

try {
    if (true) { 
        throw new CustomException('Тестовое исключение');
    }
    if (false) { 
        throw new DatabaseException('Ошибка базы данных');
    }
} catch (CustomException | DatabaseException $e) {
    ExceptionHandler::handle($e);
} finally {
    print('Выполнение завершено');
}