<?php

namespace Project;

class Test
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
