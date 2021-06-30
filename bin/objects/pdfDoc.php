<?php


trait pdfDoc
{
    private TCPDF $pdfDocument;

    /**
     * pdfDocument constructor.
     * @param string $pageOrientation
     * @param string $unit
     * @param string $pageFormat
     */
    public function __construct()
    {
        $this->pdfDocument = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $this->pdfDocument->SetCreator(PDF_CREATOR);
    }

    public function addHead():Head{
        $head = new pdfHead($this->pdfDocument);
        $this->head =  $head;
        $this->isPrintHeader = true;
        return $head;
    }

    public function addFooter():Footer{
       $footer = new pdfFooter($this->pdfDocument);
       $this->footer = $footer;
        $this->isPrintFooter = true;
        return $footer;

    }
}