<?php

namespace App\Console\Commands;

use App\Laboratory4\BinaryTree;
use App\Laboratory4\EncryptedString;
use Bubblegum\Candyman\Command;
use Bubblegum\Candyman\Console;

class LabWork4 extends Command
{
    protected string $info = 'laboratory work 4';

    public function handle($args): void
    {


        $tree = new BinaryTree();
        $tree->add(new EncryptedString("Alpha", 5, 2));
        $tree->add(new EncryptedString("Beta", 4, 3));
        $tree->add(new EncryptedString("Gamma", 5, 1));
        $tree->add(new EncryptedString("Delta", 5, 5));
        $tree->add(new EncryptedString("Epsilon", 7, 4));

        Console::info("Preorder traversal:");
        $tree->preOrderTraversal($tree->root);
    }
}