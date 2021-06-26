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

    public function setHead(Head $head)
    {
        $this->head = $head;
    }

    protected function getHeader(): string
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

    public function addTable(Table $table)
    {
        $this->addChild($table);
    }


    public function setFooter(Footer $footer)
    {
        $this->footer = $footer;
    }

    protected function getFooter(): string
    {
        return $this->footer;
    }
}