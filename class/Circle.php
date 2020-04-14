<?php


class Circle implements Comparable
{
    protected $name;
    protected $radius;
    public function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    function compareTo($objOther)
    {
        if ($this->getRadius()>$objOther->getRadius()) {
            return 1;
        } else if ($this->getRadius()<$objOther->getRadius()) {
            return -1;
        } else {
            return 0;
        }
    }

}