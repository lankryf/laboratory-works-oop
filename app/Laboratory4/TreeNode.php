<?php

namespace App\Laboratory4;


class TreeNode {
    public EncryptedString $value;
    public ?TreeNode $left = null;
    public ?TreeNode $right = null;

    public function __construct(EncryptedString $value) {
        $this->value = $value;
    }
}