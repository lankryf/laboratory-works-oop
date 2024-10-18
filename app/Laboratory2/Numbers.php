<?php

namespace App\Laboratory2;

class Numbers extends Row
{
     public function move(): void
     {
         if (strlen($this->rowValue) > 0) {
             $this->rowValue = $this->rowValue[-1] . substr($this->rowValue, 0, -1);
         }
     }
}