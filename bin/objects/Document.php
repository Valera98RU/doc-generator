<?php


class Document extends BaseContainer
{
    private $author;
    private $title;
    private $subject;
    private $keyWord;
    private $head;
    private $footer;

    public function __construct()
    {
        $this->setObjectTag('body');
    }

    public function setHead():Head
    {
        $head = new Head();
        $this->head = $head;
        return $head;
    }

    protected function getHead(): string
    {
        return $this->head;
    }

    public function generateObject(): string
    {
        $html = $this->head;
        $html .= parent::generateObject();
        $html .= $this->footer;
        return $html;
    }

    public function addPage(): Page
    {
        $page = new Page();
        $this->addChild($page);
        return $page;

    }


    public function setFooter():Footer
    {
        $footer = new Footer();
        $this->footer = $footer;
        return $footer;
    }

    protected function getFooter(): string
    {
        return $this->footer;
    }
}