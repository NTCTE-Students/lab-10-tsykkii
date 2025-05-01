<?php
require_once 'exceptions/RegistrationException.php';

function validateRegistration($password, $email, $requiredFields) {
    if (strlen($password) < 6) {
        throw new RegistrationException('Пароль должен быть не менее 8 символов.');
    }

    if (!filtervar($email, FILTERVALIDATEEMAIL)) {
        throw new RegistrationException('Некорректный формат email.');
    }

    foreach ($requiredFields as $field) {
        if (empty($field)) {
            throw new RegistrationException('Все обязательные поля должны быть заполнены.');
        }
    }
}

try {
    validateRegistration('123', 'invalid-email', ['username' => '']);
} catch (RegistrationException $e) {
    print("Ошибка: {$e->getMessage()}<br>");
} finally {
    print('Выполнение завершено');
}