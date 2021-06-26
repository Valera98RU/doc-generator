<?php


class ListContainer extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('ul');
    }

    public function addItem(ListItem $listItem)
    {
        $this->addChild($listItem);
    }

    public function setType($type)
    {
        $this->addAttribute('type', $type);
    }


}