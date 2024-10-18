<?php

namespace App\Laboratory4;

class EncryptedString {
    private string $value;
    private int $size;
    private int $key;

    public function __construct(string $value, int $size, int $key) {
        $this->value = substr($value, 0, $size);
        $this->size = $size;
        $this->key = $key;
    }

    public function getLength(): int {
        return $this->size;
    }

    public function encrypt(): void {
        $this->value = $this->shiftString($this->key);
    }

    public function decrypt(): void {
        $this->value = $this->shiftString(-$this->key);
    }

    private function shiftString(int $shift): string {
        $result = '';
        for ($i = 0; $i < strlen($this->value); $i++) {
            $result .= chr(ord($this->value[$i]) + $shift);
        }
        return $result;
    }

    public function __toString(): string {
        return "Value: {$this->value}, Length: {$this->size}, Key: {$this->key}";
    }

    public function revealKey(): int {
        return $this->key;
    }
}
