<?php


class wordDocument extends  Document
{
    use wordDoc;

    private string $docName;

    public function __call($name, $arguments)
    {

    }

    public function getDocument(){

    }

    public function setName(string $name){
        $this->docName = $name;
    }

    public function setFontSize(int $size){
        $this->phpWord->setDefaultFontSize($size);
    }
    public function addHead(){
        //$this->phpWord->;
    }


    public function addPage():\docGenerator\bin\objects\word\wordPage{
        return new \docGenerator\bin\objects\word\wordPage($this->phpWord);
    }

    private function saveAndUploadFromOOXML(){
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($this->phpWord, 'Word2007');
        $objWriter->save($this->docName.'.docx');
    }
    private function saveAndUploadFromODF(){
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($this->phpWord, 'ODText');
        $objWriter->save($this->docName.'.odt');
    }
    private function saveAndUploadFromHTML(){
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($this->phpWord, 'HTML');
        $objWriter->save($this->docName.'.html');
    }
}