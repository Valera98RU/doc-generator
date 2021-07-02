<?php


namespace docGenerator\bin\objects\word;


use PhpOffice\PhpWord\Element\ListItem;

class wordListItem extends \ListItem
{
    private ListItem $listItem;

    public function __construct(ListItem &$listItem)
    {
        $this->listItem = $listItem;
    }



}