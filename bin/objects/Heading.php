<?php


class Heading extends BaseObject
{
    private $level = 1;

    public function __construct()
    {
        $this->setObjectTag('h'.$this->level);
    }

    public function setLevel(int $level){
        $this->level = $level;
    }

    public function getContent()
    {
        return $this->content;
    }
}