<?php

namespace docGenerator\bin;

use Exception;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;
use Symfony\Component\Yaml\Yaml;


class docGenerator
{
    const PDF_DOC_TYPE = 'pdf';
    const WORD_DOC_TYPE = 'word';
    const HTML_DOC_TYPE = 'html';

    private generators\IDocGenerator $docGenerator;
    private  $vocabulary;
    private  $templateArray;

    public function __construct(string $docType){
        $docGeneratorFactoryName = $docType."DocGeneratorFactory";
        $docGeneratorFactory = new pdfDocGeneratorFactory();
        $this->docGenerator = $docGeneratorFactory->createGenerator();
    }


    /**
     * @throws Exception
     */
    public function generateDocument($templateFileName){
        $this->setVocabulary($templateFileName);
        $this->parseTemplate($templateFileName);
        $actionArray = $this->templateArray;
        foreach ($actionArray as $action=>$value){
            $this->doAction($this->docGenerator,$this->vocabulary[$action],$value);        }
        $this->docGenerator->generate();
    }

    private function doAction(&$object,$action,$values){

        if(is_array($values)){
            if($action){
                $newObject = $object->$action();
            }else{
                $newObject= $object;
            }
            foreach ($values as $key=>$value){
                if(!is_int($key)){
                    $this->doAction($newObject,$this->vocabulary[$key],$value);
                }else{
                    $this->doAction($newObject,null,$value);
                }
            }
        }else{
            if($action){
                $object->$action($values);
            }

        }
    }

    /**
     * @param $templateFileName
     */
    private function setVocabulary($templateFileName){
        $extension = pathinfo($templateFileName, PATHINFO_EXTENSION);
        $vocabularyFileName = "src/".$extension."-vocabulary.json";
        $vocabularyJson = file_get_contents($vocabularyFileName);
        $this->vocabulary = json_decode($vocabularyJson, TRUE);
    }
    private function parseTemplate($templateFileName){
        $extension = pathinfo($templateFileName, PATHINFO_EXTENSION);
        switch($extension){
            case 'yaml':
                $this->templateArray = Yaml::parseFile($templateFileName);
                break;
            case 'json':
                $templateJson = file_get_contents($templateFileName);
                $this->templateArray= json_decode($templateJson);
                break;
        }
    }
}