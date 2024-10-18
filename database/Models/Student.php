<?php

namespace Database\Models;

use Bubblegum\Database\Model;

class Student extends Model
{
    protected $tableName = 'students';
    public function multiplyBigNumbers(int $number1, int $number2): float|int
    {
        return $number1 * $number2;
    }
}