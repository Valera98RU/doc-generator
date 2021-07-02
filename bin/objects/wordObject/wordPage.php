<?php

namespace docGenerator\bin\objects\word;
use Page;

class wordPage extends Page
{

    private \PhpOffice\PhpWord\PhpWord $phpWord;
    private $section;

    public function __construct(\PhpOffice\PhpWord\PhpWord &$phpWord)
    {
        $this->phpWord = $phpWord;
        $this->section = $phpWord->addSection();
    }

    public function addTable():wordTable{
        $table = $this->section->addTable();
        $table = new wordTable($table);
        return $table;
    }
    public function addList():\ListContainer{
        $list = new wordList($this->section);
        return $list;

    }


}