<?php 
namespace Core;

class Validator {
    public static function checkEmpty($to_check, $value) {
        global $errors;
        if(empty(trim($value))) {
            $errors[] = "$to_check cannot be empty.";
        }
    }
}