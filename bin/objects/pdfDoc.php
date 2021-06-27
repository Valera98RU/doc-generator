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
}