<?php

namespace Database\Models;

use Bubblegum\Database\Model;

class Student extends Model
{
    protected $tableName = 'students';


    public static function create(array $data): Model
    {
        if (preg_match('/^[a-zA-Z\s]+$/', $data['name']))
        {
            throw new \Exception('Only letters and white space allowed');
        }
        return parent::create($data);
    }
    public function multiplyBigNumbers(int $number1, int $number2): float|int
    {
        return $number1 * $number2;
    }
}