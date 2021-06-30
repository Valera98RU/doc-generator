<?php


class pdfHead extends Head
{
    /** @var TCPDF  */
    private TCPDF $pdfDock;


    private string $logo = '';
    private int $logoWidth = 0;
    private string $title = '';
    private string $text = '';
    private  $titleColor = array(0, 0, 0);
    private $textColor = array(0, 0, 0);
    private $margin = PDF_MARGIN_HEADER;
    private $fontFamily = PDF_FONT_NAME_MAIN;
    private $fontStyle = '';
    private $fontSizePt = PDF_FONT_SIZE_MAIN;


    public function __construct(TCPDF &$pdfDoc)
    {
        $this->pdfDock = $pdfDoc;

    }

    public function generateObject():string{

        $this->pdfDock->setHeaderData($this->logo, $this->logoWidth, $this->title,$this->text,$this->titleColor,$this->textColor);
        $this->pdfDock->setHeaderFont(array($this->fontFamily, $this->fontStyle, $this->fontSizePt));
        $this->pdfDock->setHeaderMargin($this->margin);
        return '';
    }

    public function setFontFamily(string $fontFamily){
        $this->fontFamily = $fontFamily;
    }
    public function setFontStyle(string $fontStyle){
        $this->fontStyle = $fontStyle;
    }

    public function setFontSize(int $sizePt){
        $this->fontSizePt = $sizePt;
    }

    public function setTitle(string $title){
      $this->title = $title;
    }

    public function setLogo(string $logo)
    {
        $this->logo = $logo;
    }

    public function setLogoWidth(string $width)
    {
        $this->logoWidth = $width;
    }


    public function setText(string $headerString)
    {
        $this->text = $headerString;
    }

    public function setTitleColor(array $color)
    {
        $this->titleColor = $color;
    }

    public function setTextColor(array $color)
    {
        $this->textColor = $color;
    }

    public function setMargin(string $margin):void
    {
        $this->margin = $margin;
    }

}