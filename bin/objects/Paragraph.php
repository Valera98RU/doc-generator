<?php


class Paragraph extends BaseObject
{
    public function __construct()
    {
        $this->setObjectTag('p');
    }

    public function getContent()
    {
        return $this->content;
    }
}