<?php
namespace Strategy;


class Lorry extends Speed implements ISpeed
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
