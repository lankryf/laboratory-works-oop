<?php
use Bubblegum\Candyman\Candyman;

use App\Console\Commands\LabWork1;
use App\Console\Commands\LabWork2;
use App\Console\Commands\LabWork3;

Candyman::registerCommand('lab1', LabWork1::class);
Candyman::registerCommand('lab2', LabWork2::class);
Candyman::registerCommand('lab3', LabWork3::class);