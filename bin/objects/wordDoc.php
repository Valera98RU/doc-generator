<?php


trait wordDoc
{
    private \PhpOffice\PhpWord\PhpWord $phpWord;

    public function addPage(){

    }
    public function __construct(){
        $this->phpWord = new PhpOffice\PhpWord\PhpWord();
    }
}