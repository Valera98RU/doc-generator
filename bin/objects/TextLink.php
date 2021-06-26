<?php


class TextLink extends BaseObject
{
    public function __construct()
    {
        $this->setObjectTag('a');
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setHref(string $href){
        $this->addAttribute('href',$href);
    }
    public function setName(string $name){
        $this->addAttribute('name',$name);
    }
    public function setRel(string $rel){
        $this->addAttribute('rel',$rel);
    }
    public function setType(string $type){
        $this->addAttribute('type',$type);
    }

}