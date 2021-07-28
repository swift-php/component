<?php

namespace Swift\Component;

trait Singleton
{
    private $instance;
    static function getInstance(...$args)
    {
        if (!isset(self::$instance)) {
            self::$instance = new static(...$args);
        }

        return self::$instance;
    }

}
