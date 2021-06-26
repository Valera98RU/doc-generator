<?php


class Meta extends BaseObject
{

    public function __construct()
    {
        $this->setObjectTag('meta');
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
    }


    private function generateHtml(): string
    {
        $html = "<" . $this->getObjectTag() . " " . $this->getAttributes() . ">";
        return $html;
    }

    public function setCharset(string $charset)
    {
        $this->addAttribute('charset', $charset);
    }

    public function setContent(string $content)
    {
        $this->addAttribute('content', $content);
    }

    public function setHttpEquiv(string $httpEquiv)
    {
        $this->addAttribute('http-equiv', $httpEquiv);
    }

    public function setName(string $name)
    {
        $this->addAttribute('name', $name);
    }

}