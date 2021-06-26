<?php


class Table extends BaseContainer
{

    public function __construct()
    {
        $this->setObjectTag('table');
    }

    public function setHead(TableHead $head)
    {
        $this->addChild($head);
    }

    public function setFooter(TableFooter $footer)
    {
        $this->addChild($footer);
    }

    public function setBody(TableBody $body)
    {
        $this->addChild($body);
    }
}