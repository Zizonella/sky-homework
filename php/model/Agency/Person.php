<?php
namespace Agency;
abstract class Person
{
    protected $first_name;
    protected $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}