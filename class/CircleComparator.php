<?php


class CircleComparator implements Comparator
{

    function comparate($obj1, $obj2)
    {
        if ($obj1->getRadius() > $obj2->getRadius()) {
            return 1;
        } else if ($obj1->getRadius() < $obj2->getRadius()) {
            return -1;
        } else {
            return 0;
        }
    }
}