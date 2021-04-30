<?php
namespace Strategy;


class Moto extends Speed
{
    public function exists()
    {
        return is_speed($this->speed);
    }

    public function getName()
    {
        return getName($this->name);
    }
}
