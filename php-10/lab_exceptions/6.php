<?php

require_once __DIR__ . '/exceptions/ShopException.php';
require_once __DIR__ . '/exceptions/InsufficientFundsException.php';
require_once __DIR__ . '/exceptions/ProductNotFoundException.php';

try {
    throw new InsufficientFundsException();
} catch (ShopException $e) {
    print("Произошла ошибка в магазине: {$e->getMessage()}<br>");
} finally {
    print('Выполнение завершено');
}