<?php


namespace bin\factories;

use bin\generators\IDocGenerator;
use bin\generators\pdfGenerator;

class pdfDocGeneratorFactory implements IDocFactory
{

    public function createGenerator(): IDocGenerator
    {
        return new pdfGenerator();
    }
}