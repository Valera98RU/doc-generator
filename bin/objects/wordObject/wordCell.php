<?php


namespace docGenerator\bin\objects\word;


use PhpOffice\PhpWord\Element\Cell;

class wordCell extends \Cell
{
    private Cell $cell;
    public function __construct(Cell &$cell)
    {
        $this->cell = $cell;
    }

    public function setContent(string $content){
        $this->cell->addText($content);
    }


}