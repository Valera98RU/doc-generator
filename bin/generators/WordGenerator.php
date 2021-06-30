<?php

namespace docGenerator\bin\generators;
use wordDocument;

class WordGenerator implements IDocGenerator
{
    private wordDocument $document;
    public function createDocument(){
        return $this->document = new worddocument();
    }

    public function generate()
    {
       $this->document->getDocument();
    }
}