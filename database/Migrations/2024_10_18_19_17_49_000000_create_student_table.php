<?php
use Bubblegum\Migrations\Migration;

use Bubblegum\Migrations\Table;
use Bubblegum\Migrations\Blueprint;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Table::create('students', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->varchar('name', 50);
            $blueprint->varchar('lastname', 50);
            $blueprint->smallint('course');
            $blueprint->bigserial('ticket_id');
            $blueprint->smallint('sex');
            $blueprint->varchar('address', 255);
            $blueprint->bigserial('record_book');
        });
    }


    /**
     * @return void
     */
    public function down(): void
    {
        Table::drop('students');
    }
};
