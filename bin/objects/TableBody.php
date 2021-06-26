<?php


class TableBody extends BaseContainer
{
    public function __construct()
    {
        $this->setObjectTag('tbody');
    }
    public function addRow(TableRow $row)
    {
        $this->addChild($row);
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