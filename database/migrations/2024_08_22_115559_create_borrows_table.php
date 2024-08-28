<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('borrows')) {
            Schema::create('borrows', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('book_id')->constrained()->onDelete('cascade');
                $table->timestamp('borrowed_at');
                $table->timestamp('return_due_date');
                $table->timestamp('returned_at')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
