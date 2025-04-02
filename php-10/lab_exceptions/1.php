<?php
require_once __DIR__ . '/exceptions/CustomException.php';
require_once __DIR__ . '/exceptions/ValidationException.php';
require_once __DIR__ . '/handlers/ExceptionHandler.php';

function test_input($data) {
    return trim(htmlspecialchars($data));
}

$email = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        throw new ValidationException('E-mail обязателен');
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationException('Неверный формат email');
        }
    }
}

try {
} catch (Throwable $e) {
    ExceptionHandler::handle($e);
} finally {
    print('Выполнение завершено');
}