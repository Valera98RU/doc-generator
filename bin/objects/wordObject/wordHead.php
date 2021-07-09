<?php


namespace docGenerator\bin\objects\word;


use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Element\Section ;

class wordHead extends \Head
{
    private Section $section;

    public function __construct(  $section)
    {
        $this->section = $section;
    }

    public function setTitle(string $title){
        $this->section->addHeader();
    }
}