<?php
class Person
{
    public $name;

    public function __construct($name)
    {
       $this->name = $name;
    }
    public function greet()
    {
      return 'Hi, my name is ' . $this->name;
    }
}