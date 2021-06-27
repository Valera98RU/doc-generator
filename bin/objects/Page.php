<?php


class Page extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('div');
    }

    public function addTable():Table
    {
        $table = new Table();
        $this->addChild($table);
        return $table;
    }

    public function addList():ListContainer
    {
        $list = new ListContainer();
        $this->addChild($list);
        return $list;
    }


}