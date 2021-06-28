<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/tecnickcom/tcpdf/tcpdf_autoconfig.php';
$loader = new Nette\Loaders\RobotLoader;

$loader->addDirectory(__DIR__ . '/bin');

$loader->setTempDirectory(__DIR__ . '/temp');
$loader->register();
$loader->rebuild();

$docGenerator = new docGenerator\bin\docGenerator(\docGenerator\bin\docGenerator::PDF_DOC_TYPE);


$docGenerator->generateDocument("test/testDoc.yaml");