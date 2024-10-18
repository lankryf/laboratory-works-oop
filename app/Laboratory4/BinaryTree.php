<?php

namespace App\Laboratory4;

use Bubblegum\Candyman\Console;

class BinaryTree {
    public ?TreeNode $root = null;

    public function add(EncryptedString $value): void {
        $this->root = $this->addRecursive($this->root, $value);
    }

    private function addRecursive(?TreeNode $node, EncryptedString $value): TreeNode {
        if ($node === null) {
            return new TreeNode($value);
        }

        if ($value->getLength() < $node->value->getLength()) {
            $node->left = $this->addRecursive($node->left, $value);
        } else {
            $node->right = $this->addRecursive($node->right, $value);
        }

        return $node;
    }

    public function preOrderTraversal(?TreeNode $node): void {
        if ($node === null) return;

        Console::info($node->value);
        $this->preOrderTraversal($node->left);
        $this->preOrderTraversal($node->right);
    }
}
