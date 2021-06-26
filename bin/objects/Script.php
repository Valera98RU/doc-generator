<?php


class Script extends BaseObject
{
    public function __construct()
    {
        $this->setObjectTag("script");
    }

    public function getContent()
    {
        return $this->content;
    }


}