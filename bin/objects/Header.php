<?php


class Header extends BaseContainer
{
   public function __construct()
   {
       $this->setObjectTag("header");
   }
   public function setTitle(string $title){
       $this->addAttribute('title',$title);
   }
}