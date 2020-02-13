<?php


/**
 * @author: AK
 * Date: 4/11/16
 * @copyright AK
 */
class DummyModelEncrypting extends DummyModel
{
    protected $encrypts = [
        'phone',
        'cell'
    ];
}