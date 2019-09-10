<?php
include_once "Resizeable.php";
include_once "Shape.php";

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function resize($doublePercent)
    {
        return $this->getArea() + ($this->getArea() * $doublePercent) / 100;
    }
}