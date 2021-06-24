<?php

namespace bin\factories;

use bin\generators\IDocGenerator;

interface IDocFactory
{
    public function createGenerator():IDocGenerator;
}