<?php


namespace docGenerator\bin\objects\word;


use ListContainer;
use PhpOffice\PhpWord\PhpWord;
use \PhpOffice\PhpWord\Element\Section;

class wordList extends ListContainer
{
    private Section $section;

    public function __construct(Section &$section)
    {
        $this->section = $section;
    }

    public function addItem(): \ListItem {
        $item = $this->section->addListItem();
        $item = new wordListItem($item);
        return $item;
    }
}