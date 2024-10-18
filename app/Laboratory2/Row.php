<?php

namespace App\Laboratory2;

abstract class Row
{
    public function __construct(protected string $rowValue)
    {}
    public function getLength(): int
    {
        return strlen($this->rowValue);
    }
    public function getRowValue(): string
    {
        return $this->rowValue;
    }
    abstract public function move(): void;
}