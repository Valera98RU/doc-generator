<?php


namespace docGenerator\bin\factories;

use docGenerator\bin\generators\IDocGenerator;
use docGenerator\bin\generators\pdfGenerator;

class pdfDocGeneratorFactory implements IDocFactory
{

    public function createGenerator(): IDocGenerator
    {
        return new pdfGenerator();
    }
}