<?php


class pdfDocument extends Document
{
    use pdfDoc;



    private $monospacedFont = PDF_FONT_MONOSPACED;
    private $marginLeft = PDF_MARGIN_LEFT;
    private $marginTop = PDF_MARGIN_TOP;
    private $marginRight = PDF_MARGIN_RIGHT;
    private $autoPageBreak = true;
    private $imageScaleRatio = PDF_IMAGE_SCALE_RATIO;
    private $fontSubsetting = true;
    private $fontFamily = 'dejavusans';
    private $fontStyle = '';
    private $fontSize = 14;
    private $fontFile = '';
    private $docName = 'pdfDoc.pdf';
    /** @var pdfHead */
    private $head;
    /** @var pdfFooter */
    private $footer;
    /** @var array<Page> */
    private $pages = [];

    private $isPrintHeader = false;
    private $isPrintFooter = false;


    public function getDocument()
    {

        if($this->head){
            $this->head->generateObject();


        }

        if($this->footer){
            $this->footer->generateObject();
        }


        $this->pdfDocument->setPrintHeader($this->isPrintHeader);
        $this->pdfDocument->setPrintFooter($this->isPrintFooter);


        $this->pdfDocument->SetDefaultMonospacedFont($this->monospacedFont);

        $this->pdfDocument->SetMargins($this->marginLeft, $this->marginTop, $this->marginRight);


        $this->pdfDocument->SetAutoPageBreak($this->autoPageBreak, PDF_MARGIN_BOTTOM);

        $this->pdfDocument->setImageScale($this->imageScaleRatio);

        $this->pdfDocument->setFontSubsetting($this->fontSubsetting);

        $this->pdfDocument->SetFont($this->fontFamily, $this->fontStyle, $this->fontSize, $this->fontFile);



        foreach ($this->pages as $page) {
            $this->pdfDocument->AddPage();
            $html  = $page->generateObject();
            $this->pdfDocument->writeHTML($html,true, false, false, false, '');
        }
        $this->pdfDocument->lastPage();

        if (ob_get_contents()) ob_end_clean();
        $this->pdfDocument->Output($this->docName, 'I');

    }

    public function setPrintHeader(bool $value){
        $this->isPrintHeader = $value;
    }

    public function setPrintFooter(bool $value){
        $this->isPrintFooter = $value;
    }



    public function setName(string $name)
    {
        $this->docName = $name;
    }

    public function addPage(): Page
    {
        $page = new Page();
        array_push($this->pages, $page);
        return $page;
    }

    public function setFontFile(string $file)
    {
        $this->fontFile = $file;
    }

    public function setFontSize(int $fontSizePt)
    {
        $this->fontSize = $fontSizePt;
    }


    public function setFontStyle(string $style)
    {
        $this->fontStyle = $style;
    }

    public function setFontFamily(string $fontFamily)
    {
        $this->fontFamily = $fontFamily;
    }

    public function setFontSubsetting(bool $fontSubsetting)
    {
        $this->fontSubsetting = $fontSubsetting;
    }


    public function setImageScale(float $imageScale)
    {
        $this->imageScaleRatio = $imageScale;
    }

    public function setAutoPageBreak(bool $autoPageBreak)
    {
        $this->autoPageBreak = $autoPageBreak;
    }



    public function setFooterMargin(string $margin)
    {
        $this->footerMargin = $margin;
    }

    public function setMarginLeft(string $marginLeft)
    {
        $this->marginLeft = $marginLeft;
    }

    public function setMarginTop(string $marginTop)
    {
        $this->marginTop = $marginTop;
    }

    public function setMarginRight(string $marginRight)
    {
        $this->marginRight = $marginRight;
    }


    public function setDefaultMonospacedFont(string $monospacedFont)
    {
        $this->monospacedFont = $monospacedFont;
    }

    public function setAuthor(string $author)
    {
        $this->pdfDocument->SetAuthor($author);
    }

    public function setTitle(string $title)
    {
        $this->pdfDocument->SetTitle($title);
    }

    public function setSubject(string $subject)
    {
        $this->pdfDocument->SetSubject($subject);
    }

    public function setKeyWord(string $keyWord)
    {
        $this->pdfDocument->SetKeywords($keyWord);
    }


    public function setFooterLineColor(array $color)
    {
        $this->footerLineColor = $color;
    }

    public function setFooterTextColor(array $color)
    {
        $this->footerTextColor = $color;
    }

    private function setFooterFontStyle(string $style)
    {
        $this->footerFontStyle = $style;
    }

    /**
     * @param string $footerFontFamily
     */
    public function setFooterFontFamily(string $footerFontFamily): void
    {
        $this->footerFontFamily = $footerFontFamily;
    }

    /**
     * @param int $footerFontSizePt
     */
    public function setFooterFontSizePt(int $footerFontSizePt): void
    {
        $this->footerFontSizePt = $footerFontSizePt;
    }


}