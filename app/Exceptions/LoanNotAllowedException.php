<?php
/**
 * @author: AK
 * Date: 5/7/16
 * @copyright AK
 */


namespace App\Exceptions;


use Exception;

class LoanNotAllowedException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null) {
        if ($message == "") {
            $message = "Loan Not Allowed";
        }
        return parent::__construct($message, $code, $previous);
    }
}