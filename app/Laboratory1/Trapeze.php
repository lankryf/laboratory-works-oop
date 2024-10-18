<?php

namespace App\Laboratory1;

class Trapeze
{
    protected array $coordinates;
    protected ?float $area = null;
    protected ?float $perimeter = null;

    public function __construct(array $coordinates)
    {
        $this->coordinates = $coordinates;
    }

    public function calculateArea(): float
    {
        [$x1, $y1] = $this->coordinates[0];
        [$x2, $y2] = $this->coordinates[1];
        [$x3, $y3] = $this->coordinates[2];
        [$x4, $y4] = $this->coordinates[3];

        $this->area = 0.5 * abs(
            $x1 * $y2 + $x2 * $y3 + $x3 * $y4 + $x4 * $y1 -
            ($y1 * $x2 + $y2 * $x3 + $y3 * $x4 + $y4 * $x1)
        );

        return $this->area;
    }

    public function calculatePerimeter(): float
    {
        $perimeter = 0;
        $numPoints = count($this->coordinates);

        for ($i = 0; $i < $numPoints; $i++) {
            [$x1, $y1] = $this->coordinates[$i];
            [$x2, $y2] = $this->coordinates[($i + 1) % $numPoints];

            $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
            $perimeter += $distance;
        }

        $this->perimeter = $perimeter;
        return $this->perimeter;
    }

    public function getArea(): float
    {
        return $this->area ?? $this->calculateArea();
    }

    public function getPerimeter(): float
    {
        return $this->perimeter ?? $this->calculatePerimeter();
    }

    public function getCoordinates(): array
    {
        return $this->coordinates;
    }
}