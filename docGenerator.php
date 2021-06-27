<?php


class docGenerator
{
    const PDF_DOC_TYPE = 'pdf';
    const WORD_DOC_TYPE = 'word';
    const HTML_DOC_TYPE = 'html';

    private docGenerator\bin\generators\IDocGenerator $docGenerator;
    private  $vocabulary;

    public function __constructor(string $docType){
        $docGeneratorFactoryName = $docType."DocGeneratorFactory";
        $docGeneratorFactory = new $docGeneratorFactoryName();
        $this->docGenerator = $docGeneratorFactory->createGenerator();
    }


    /**
     * @throws Exception
     */
    public function generateDocument($templateFileName){
        $this->setVocabulary($templateFileName);
        $actionArray = array();//TODO parse template on action array

        foreach ($actionArray as $action=>$value){

            $this->doAction($this->vocabulary[$action],$value);
        }
        $this->docGenerator->generate();
    }

    private function doAction($action,$values){
        if(is_array($values)){
            $this->docGenerator->$action();
            foreach ($values as $key=>$value){
                $this->doAction($this->vocabulary[$key],$values);
            }
        }else{
            $this->docGenerator->$action($values);
        }
    }

    /**
     * @param $templateFileName
     */
    public function setVocabulary($templateFileName){
        $extension = pathinfo($templateFileName, PATHINFO_EXTENSION);
        $vocabularyFileName = "src/".$extension."-vocabulary.json";
        $vocabularyJson = file_get_contents($vocabularyFileName);
        $this->vocabulary = new  RecursiveIteratorIterator(
            new RecursiveArrayIterator(json_decode($vocabularyJson, TRUE)),
            RecursiveIteratorIterator::SELF_FIRST);
    }
}