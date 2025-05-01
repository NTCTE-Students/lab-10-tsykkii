<?php

require_once __DIR__ . '/exceptions/CustomException.php';
require_once __DIR__ . '/exceptions/DivisionByZeroException.php';
require_once __DIR__ . '/handlers/ExceptionHandler.php';

function divide($a, $b) {
    if ($b === 0) {
        throw new DivisionByZeroException("Ошибка: Деление на ноль");
    }
    return $a / $b;
}

try {
    $result = divide(10, 0); 
    print("Результат: {$result}");
} catch (DivisionByZeroException $e) {
    ExceptionHandler::handle($e);
} catch (Throwable $e) {
    ExceptionHandler::handle($e);
} finally {
    print('Выполнение завершено');
}