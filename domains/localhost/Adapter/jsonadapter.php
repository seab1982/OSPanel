<?php

class JsonAdapter
{
    public $json;

    public function __construct(array $json)
    {
        $this->json = $json;
    }

    public function jsonConverter()
    {
        return json_decode($this->json);
    }
}
