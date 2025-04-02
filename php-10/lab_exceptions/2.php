<?php

require_once __DIR__ . '/exceptions/CustomException.php';
require_once __DIR__ . '/exceptions/FileReadException.php';
require_once __DIR__ . '/handlers/ExceptionHandler.php';

function readFileContent($filename) {
    if (!file_exists($filename)) {
        throw new FileReadException("Файл не найден: {$filename}");
    }
    
    $content = file_get_contents($filename);
    if ($content === false) {
        throw new FileReadException("Ошибка чтения файла: {$filename}");
    }

    return $content;
}

try {
    $filename = 'e.txt'; 
    $content = readFileContent($filename);
    print($content);
} catch (Throwable $e) {
    ExceptionHandler::handle($e);
} finally {
    print('Выполнение завершено');
}