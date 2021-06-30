<?php


class wordDocument extends  Document
{
    use wordDoc;

    private string $docName;

    public function getDocument(){





    }

    public function setName(string $name){
        $this->docName = $name;
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