<?php

namespace Laracasts;

class Person
{
    protected $name;

    public function __construct($name)
    {
        return $this->name = $name;
    }
}
