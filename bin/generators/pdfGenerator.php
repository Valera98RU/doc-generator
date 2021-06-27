<?php

namespace docGenerator\bin\generators;

class pdfGenerator implements IDocGenerator
{
    private \pdfDocument $document;

    public function createDocument()
    {
        return $this->document = new \pdfDocument();
    }

    public function generate()
    {
        $this->document->getDocument();
    }


}