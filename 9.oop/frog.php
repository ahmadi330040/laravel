<?php 
// Import Data dari animal
require_once('animal.php');

class Frog extends animal 
{
    // Property
    public $name;
    public $legs = 4 ;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jump() 
    {
        return 'hop-hop';
    }

    public function get_legs()
    {
        return $this->legs;
    }

}