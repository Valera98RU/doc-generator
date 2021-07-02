<?php


namespace docGenerator\bin\factories;


use docGenerator\bin\generators\IDocGenerator;
use docGenerator\bin\generators\WordGenerator;

class wordDocGeneratorFactory implements IDocFactory
{

    public function createGenerator(): IDocGenerator
    {
        return new WordGenerator();
    }
}