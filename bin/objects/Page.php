<?php


class Page extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('div');
    }

    public function addTable(Table $table)
    {
        $this->addChild($table);
    }

    public function addList(ListContainer $list)
    {
        $this->addChild($list);
    }


}