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

    public function addMeta(Meta $meta)
    {
        $this->addChild($meta);
    }

    public function addLink(Link $link)
    {
        $this->addChild($link);
    }

    public function addStyle(Style $style)
    {

        $this->addChild($style);
    }

    public function addScript(Script $script)
    {
        $this->addChild($script);
    }

}