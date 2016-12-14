<?php

/**
 * Created by PhpStorm.
 * User: Roma
 * Date: 14.12.2016
 * Time: 11:38
 */
class Circle
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getDiameter()
    {
        return $this->radius + $this->radius;
    }

    public function getSqare()
    {
        return 3.14*($this->radius * $this->radius);
    }

    public function getLenght()
    {
        return 2*3.14*($this->radius);
    }
}

$circus = new Circle(5);

echo $circus->getDiameter();
echo "\n";


echo $circus->getSqare();
echo "\n";

echo $circus->getLenght();
echo "\n";