<?php

namespace docGenerator\bin\objects\word;

use PhpOffice\PhpWord\Element\Table;

class wordTable extends \Table
{
    private Table $table;
    public function __construct(Table &$table){
        $this->table = $table;
    }


    public function addRow(): wordRow{
        $row = $this->table->addRow();
        $row = new wordRow($row);
        return $row;
    }



}