<?php
class RegistrationException extends Exception {
    public function construct($message, $code = 0, Throwable $previous = null) {
        parent::construct($message, $code, $previous);
    }
}