<?php


class TableHead extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('thead');
    }

    public function addRow():TableRow
    {
        $row = new TableRow();
        $this->addChild($row);
        return $row;
    }

    public function setAlign($align)
    {
        $this->addAttribute('align', $align);
    }

    public function setBackgroundColor($color)
    {
        $this->addAttribute('bgcolor', $color);
    }

    public function setChar($char)
    {
        $this->addAttribute('char', $char);
    }

    public function setCharOff($charOff)
    {
        $this->addAttribute('charoff', $charOff);
    }

    public function setValign($valign)
    {
        $this->addAttribute('valign', $valign);
    }

}