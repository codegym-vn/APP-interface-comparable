<?php


class ComparableCircle extends Circle implements Comparable
{
    public function compare($other): int
    {
        return $this->getRadius() <=> $other->getRadius();
    }
}