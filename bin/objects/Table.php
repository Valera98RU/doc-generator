<?php


class Table extends BaseContainer
{

    public function __construct()
    {
        $this->setObjectTag('table');
    }
    public function addRow():TableRow{
        $row =  new TableRow();
        $this->addChild($row);
        return $row;
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
    public function setCellPadding(string $CellPadding){
        $this->addAttribute('cellpadding',$CellPadding);
    }
    public function setCellSpacing(string $cellspacing){
        $this->addAttribute('cellspacing',$cellspacing);
    }
    public function setAlign(string $align){
        $this->addAttribute('align',$align);
    }
}