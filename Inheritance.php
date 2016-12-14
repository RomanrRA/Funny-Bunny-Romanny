<?php

class Control
{
    public $width = 100; // public - доступен везде (внутри и снаружи класса)

    public $height = 40;

    public $x = 10;

    public $y = 10;

    private $doNotChange = "value"; // private - доступен только внутри класса
}

class Button extends Control
{
    public $title;
    protected $backgroundColor = "grey"; // доступен внутри класса и внутри всех его потомков
    protected $foregroundColor = "black";

    /**
     * Button constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }
}

class PrimaryButton extends Button
{
    public $width = 130;
    public $height = 40;
    protected $backgroundColor = "orange";
    protected $foregroundColor = "white";
}

class SecondaryButton extends Button
{
    protected $backgroundColor = "light-gray";
    protected $foregroundColor = "dark-gray";
}

//$control = new Control();
//print_r($control);

$button = new Button("Download");
print_r($button);

$primaryPutton = new PrimaryButton("Primary Button Text");
print_r($primaryPutton);

$secondaryPutton = new SecondaryButton("Secondary Button Text");
print_r($secondaryPutton);