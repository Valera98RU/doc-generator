<?php

namespace docGenerator\bin\factories;

use docGenerator\bin\generators\IDocGenerator;

interface IDocFactory
{
    public function createGenerator():IDocGenerator;
}