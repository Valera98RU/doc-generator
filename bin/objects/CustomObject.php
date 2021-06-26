<?php


class CustomObject extends BaseObject
{
    public function __construct(string $name)
    {
        $this->setObjectTag($name);
    }

    public function getContent(): string
    {
        return $this->content;
    }
}