<?php

class Notification
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }
}