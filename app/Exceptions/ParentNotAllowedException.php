<?php
/**
 * @author: AK
 * Date: 5/7/16
 * @copyright AK
 */


namespace App\Exceptions;


use Exception;

class ParentNotAllowedException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null) {
        if ($message == "") {
            $message = "Parent Not Allowed";
        }
        return parent::__construct($message, $code, $previous);
    }
}