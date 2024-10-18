<?php

namespace App\Laboratory2;

class Letters extends Row
{
     public function move(): void
     {
         if (strlen($this->rowValue) > 0) {
             $this->rowValue = substr($this->rowValue, 1) . $this->rowValue[0];
         }
     }
}