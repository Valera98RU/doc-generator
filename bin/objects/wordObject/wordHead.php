<?php


namespace docGenerator\bin\objects\word;


use PhpOffice\PhpWord\PhpWord;

class wordHead extends \Head
{
    private PhpWord $phpWord;

    public function __construct( PhpWord $phpWord)
    {
        $this->phpWord = $phpWord;
    }

    public function setTitle(string $title){

    }
}