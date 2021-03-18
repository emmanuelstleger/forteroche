<?php
namespace App\config;

// creation of parameter class

class Parameter
{
    private $parameter;

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }

    public function get($name)
    {
        if(isset($this->parameter[$name]))
        {
            return $this->parameter[$name];
        }
    }

    public function set($name, $value)
    {
        $this->parameter[$name]=$value;
    }

    public function all()
    {
        return $this->parameter;
    }
}
