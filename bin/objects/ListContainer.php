<?php


class ListContainer extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('ul');
    }

    public function addItem():ListItem
    {
        $item = new ListItem();
        $this->addChild($item);
        return $item;
    }

    public function setType($type)
    {
        $this->addAttribute('type', $type);
    }


}