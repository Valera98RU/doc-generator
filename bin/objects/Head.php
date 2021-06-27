<?php


class Head extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('head');
    }

    public function setTitle(string $title)
    {
        $titleObject = new CustomObject('title');
        $titleObject->setContent($title);
        $this->addChild($titleObject);
    }

    public function addMeta(): Meta
    {
        $meta = new Meta();
        $this->addChild($meta);
        return $meta;
    }

    public function addLink():Link
    {
        $link = new Link();
        $this->addChild($link);
        return $link;
    }

    public function addStyle():Style
    {
        $style = new Style();
        $this->addChild($style);
        return $style;
    }

    public function addScript():Script
    {
        $script = new Script();
        $this->addChild($script);
        return $script;
    }

}