<?php


class Table extends BaseContainer
{

    public function __construct()
    {
        $this->setObjectTag('table');
    }

    public function setHead():TableHead
    {
        $head = new TableHead();
        $this->addChild($head);
        return $head;
    }

    public function setFooter():TableFooter
    {
        $footer = new TableFooter();
        $this->addChild($footer);
        return $footer;
    }

    public function setBody():TableBody
    {
        $body = new TableBody();
        $this->addChild($body);
        return $body;
    }
}