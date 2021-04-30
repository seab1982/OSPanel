<?php

namespace Strategy;

 class Speed implements ISpeed

{
    protected $speed;

    public function __construct($speed)
    {
    $this->speed = $speed;
    }
}