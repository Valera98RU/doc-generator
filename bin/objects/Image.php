<?php


class Image extends BaseObject
{
    public function __construct()
    {
        $this->setObjectTag('img');
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setAlt(string $alt){
        $this->addAttribute('alt',$alt);
    }
    public function setHeight(string $height){
        $this->addAttribute('height',$height);
    }
    public function setSrc(string $src){
        $this->addAttribute('src',$src);
    }
    public function setWidth(string $width){
        $this->addAttribute('width',$width);
    }


}