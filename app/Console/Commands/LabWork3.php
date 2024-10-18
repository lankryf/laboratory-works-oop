<?php

namespace App\Console\Commands;

use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;
use Bubblegum\Database\DB;
use Database\Models\Student;

class LabWork3 extends Command
{
    protected string $info = 'laboratory work 3';

    public function handle($args): void
    {
        DB::initPDO();
        if (isset($args[0]) and $args[0] === 'create')
        {
            Console::info('creating rows');
            Student::create([
                'name' => 'Nika',
                'lastname' => 'Uskina',
                'course' => 5,
                'ticket_id' => 1033,
                'sex' => 2,
                'address' => 'Kyiv',
                'record_book' => 132
            ]);
            Student::create([
                'name' => 'Lexa',
                'lastname' => 'Fedorenko',
                'course' => 5,
                'ticket_id' => 1044,
                'sex' => 1,
                'address' => 'Kyiv',
                'record_book' => 123
            ]);
        }
        $student = (new Student())
            ->where('sex', '=', 2)
            ->where('course', '=', 5)
            ->where('address', '=', 'Kyiv')->get();
        $count = 0;
        foreach ($student as $student) {
            Console::info(implode(' ',
                [
                    $student->name, $student->lastname, $student->course,
                    $student->ticket_id, $student->address, $student->record_book
                ]
            ));
            ++$count;
        }
    }
}