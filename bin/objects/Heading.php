<?php


class Heading extends BaseObject
{

    public function __construct(string $level)
    {
        $this->setObjectTag('h'.$level);
    }

    public function getContent()
    {
        return $this->content;
    }
}