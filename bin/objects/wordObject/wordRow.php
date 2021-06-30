<?php


namespace docGenerator\bin\objects\word;


use PhpOffice\PhpWord\Element\Row;
use PhpOffice\PhpWord\Element\Table;
use TableRow;

class wordRow extends TableRow
{
    private Row  $row;

    public function __construct(Row &$row)
    {

        $this->row = $row;
    }

    public function addCell(){

        $this->row->addCell()
    }
}