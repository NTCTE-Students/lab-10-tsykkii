<?php

class InsufficientFundsException extends ShopException {
    public function __construct($message = "Недостаточно средств для проведения операции", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}