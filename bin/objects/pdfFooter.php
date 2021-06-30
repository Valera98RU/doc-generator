<?php


class pdfFooter extends Footer
{
    private TCPDF  $pdfDoc;

    private array $lineColor = array(255, 255, 255);
    private array $textColor = array(255, 255, 255);
    private string $fontFamily = PDF_FONT_NAME_DATA;
    private string $fontStyle = '';
    private int $fontSizePt = PDF_FONT_SIZE_DATA;
    private int $margin = PDF_MARGIN_FOOTER;
     public function __construct(&$pdfDoc)
     {
         $this->pdfDoc = &$pdfDoc;
     }

     public function generateObject():string{
        $this->pdfDoc->setFooterData();
        $this->pdfDoc->setFooterFont(array($this->fontFamily, $this->fontStyle, $this->fontSizePt));
        $this->pdfDoc->setFooterMargin($this->margin);
        return '';
     }



     public function setMargin(string $margin): void{
         $this->margin = $margin;
     }
     public function setFontSizePt(int $size){
        $this->fontSizePt = $size;
     }
     public function setFontStyle(string $style){
         $this->fontStyle = $style;
     }
     public function setFontFamily(string $fontFamily){
         $this->fontFamily = $fontFamily;
     }
     public function setTextColor(array $color){
         $this->textColor = $color;
     }
    public function setLineColor(array $color){
        $this->lineColor = $color;
    }
}