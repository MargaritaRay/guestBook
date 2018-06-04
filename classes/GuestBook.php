<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 003 03.06.18
 * Time: 21:15
 */

class GuestBook
{
    protected $message;

    public function __construct($message)
    {
        return $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}