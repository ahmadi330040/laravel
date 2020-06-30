<?php 
// Import Data dari animal
require_once('animal.php');

class ape extends animal 
{
    // Property
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function yell() 
    {
        return 'Auooo';
    }

}