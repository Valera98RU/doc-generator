<?php


class TableRow extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('tr');
    }

    public function addCell():Cell
    {
        $cell = new Cell();
        $this->addChild($cell);
        return $cell;
    }
}