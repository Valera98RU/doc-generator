<?php


class Link extends BaseObject
{

    public function __construct()
    {
        $this->setObjectTag('link');
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
    }

    private function generateHtml()
    {
        $html = "<link " . $this->getAttributes() . ">";

        return $html;
    }

    public function setRel(string $rel)
    {
        $this->addAttribute('rel', $rel);
    }

    public function setHref(string $href)
    {
        $this->addAttribute('href', $href);
    }

    public function setType(string $type)
    {
        $this->addAttribute('type', $type);
    }

    public function setMedia(string $media)
    {
        $this->$this->addAttribute('media', $media);
    }

    public function setSize(string $size)
    {
        $this->addAttribute('size', $size);
    }
}