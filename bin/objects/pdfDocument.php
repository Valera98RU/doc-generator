<?php


class pdfDocument extends Document
{
    use pdfDoc;

    private $headerLogo = '';
    private $logoWidth = 0;
    private $headerTitle = '';
    private $headerString = '';
    private $headerTitleColor = array(255, 255, 255);
    private $headerTextColor = array(255, 255, 255);
    private $footerLineColor = array(255, 255, 255);
    private $footerTextColor = array(255, 255, 255);
    private $footerFontFamily = PDF_FONT_NAME_DATA;
    private $footerFontStyle = '';
    private $footerFontSizePt = PDF_FONT_SIZE_DATA;
    private $headerFontFamily = PDF_FONT_NAME_MAIN;
    private $headerFontStyle = '';
    private $headerFontSizePt = PDF_FONT_SIZE_MAIN;
    private $monospacedFont = PDF_FONT_MONOSPACED;
    private $marginLeft = PDF_MARGIN_LEFT;
    private $marginTop = PDF_MARGIN_TOP;
    private $marginRight = PDF_MARGIN_RIGHT;
    private $headerMargin = PDF_MARGIN_HEADER;
    private $footerMargin = PDF_MARGIN_FOOTER;
    private $autoPageBreak = true;
    private $imageScaleRatio = PDF_IMAGE_SCALE_RATIO;
    private $fontSubsetting = true;
    private $fontFamily = 'dejavusans';
    private $fontStyle = '';
    private $fontSize = 14;
    private $fontFile = '';
    private $docName = 'pdfDocument.pdf';
    /** @var array<Page> */
    private $pages = [];


    public function getDocument()
    {
        $this->pdfDocument->setHeaderData($this->headerLogo, $this->logoWidth, $this->headerString);
        $this->pdfDocument->setFooterData();

        $this->pdfDocument->setHeaderFont(array($this->headerFontFamily, $this->headerFontStyle, $this->headerFontSizePt));
        $this->pdfDocument->setHeaderFont(array($this->footerFontFamily, $this->footerFontStyle, $this->footerFontSizePt));

        $this->pdfDocument->SetDefaultMonospacedFont($this->monospacedFont);

        $this->pdfDocument->SetMargins($this->marginLeft, $this->marginTop, $this->marginRight);
        $this->pdfDocument->setHeaderMargin($this->headerMargin);
        $this->pdfDocument->setFooterMargin($this->footerMargin);

        $this->pdfDocument->SetAutoPageBreak($this->autoPageBreak, PDF_MARGIN_BOTTOM);

        $this->pdfDocument->setImageScale($this->imageScaleRatio);

        $this->pdfDocument->setFontSubsetting($this->fontSubsetting);

        $this->pdfDocument->SetFont($this->fontFamily, $this->fontStyle, $this->fontSize, $this->fontFile);



        foreach ($this->pages as $page) {
            $this->pdfDocument->AddPage();
            var_dump($page->generateObject());

            $this->pdfDocument->writeHTML($page->generateObject());
        }
        ob_end_clean();
        $this->pdfDocument->Output($this->docName, 'I');

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

    public function setHeaderMargin(string $margin)
    {
        $this->headerMargin = $margin;
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

    public function setHeaderLogo(string $logo)
    {
        $this->headerLogo = $logo;
    }

    public function setHeaderLogoWidth(string $width)
    {
        $this->logoWidth = $width;
    }

    public function setHeaderTitle(string $title)
    {
        $this->headerTitle = $title;
    }

    public function setHeaderString(string $headerString)
    {
        $this->headerString = $headerString;
    }

    public function setHeaderTitleColor(array $color)
    {
        $this->headerTitleColor = $color;
    }

    public function setHeaderTextColor(array $color)
    {
        $this->headerTextColor = $color;
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