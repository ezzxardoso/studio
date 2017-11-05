<?php

namespace Project;

class Car
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getname()
    {
        return $this->name;
    }

}
