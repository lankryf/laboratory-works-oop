<?php

namespace App\Console\Commands;

use App\Laboratory1\Trapeze;
use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;

class LabWork1 extends Command
{
    protected string $info = 'laboratory work 1';

    protected array $argsNames = ['searched area'];

    public function handle($args): void
    {
        $trapezes = [
            new Trapeze([[0, 0], [1, 2], [2, 2], [3, 0]]),
            new Trapeze([[0, 0], [2, 4], [4, 4], [6, 0]]),
            new Trapeze([[0, 0], [4, 8], [8, 8], [12, 0]]),
        ];
        $searched = -1;
        foreach ($trapezes as $key => $trapeze) {
            Console::info("Trapeze $key area " . $trapeze->getArea());
            Console::info("Trapeze $key perimeter " . $trapeze->getPerimeter());
            if ($args[0] == $trapeze->getArea()) {
                $searched = $key;
            }
        }
        if ($searched == -1) {
            Console::error("No results found");
        } else {
            Console::info("Searched $searched");
        }

    }
}