<?php

class ProductNotFoundException extends ShopException {
    public function __construct($message = "Товар не найден", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}