<?php

namespace App\Console\Commands;

use App\Laboratory2\Letters;
use App\Laboratory2\Numbers;
use App\Laboratory2\Row;
use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;

class LabWork2 extends Command
{
    protected string $info = 'laboratory work 2';

    public function handle($args): void
    {
        $rows = [
            new Letters('qwetyui'),
            new Letters('sdfghjkd'),
            new Numbers('12345678'),
            new Numbers('7654'),
        ];
        foreach ($rows as $row) {
            $this->printAndMove($row);
        }
    }

    public function printAndMove(Row $row): void
    {
        Console::info("Row is '{$row->getRowValue()}' length us {$row->getLength()}");
        $row->move();
        Console::info("Moved row is '{$row->getRowValue()}'");
    }
}