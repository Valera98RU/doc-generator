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

    public function setNobr(string $nobr){
        $this->addAttribute('nobr', $nobr);
    }
}