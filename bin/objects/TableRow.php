<?php


class TableRow extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('tr');
    }

    public function addCell(Cell $cell)
    {
        $this->addChild($cell);
    }
}