<?php

namespace docGenerator\bin\generators;

class pdfGenerator implements IDocGenerator
{
    private \Document $document;

    public function createDocument()
    {
        return $this->document = new \Document();
    }

    public function generate()
    {
        // TODO: Implement generate() method.
    }
}