<?php

/**
 * @author: AK
 * Date: 5/1/16
 * @copyright AK
 */

namespace App\Interfaces;

interface Allowable
{
    public function isAllowed();
    public function getDisallowedExceptions();
    public function getDisallowedMessages();
    public function getDisallowedMessagesAsString();
}