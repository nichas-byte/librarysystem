<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowBook', function (Blueprint $table) {
            $table->id();
            $table->user_id();
            $table->book_id();
            $table->string('fullname');
            $table->date('dueDate')->format('d/m/Y');
            $table->date('barrowDate')->format('d/m/Y');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
