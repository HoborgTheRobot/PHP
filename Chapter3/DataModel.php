<?php

abstract class DataModel
{
    protected string $tableName = 'random-table-name';

    public function save()
    {
        print_r('Saving to table... ' . $this->tableName);
    }
}