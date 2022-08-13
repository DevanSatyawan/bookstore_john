<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listbook', function (Blueprint $table) {
            $table->id();
            $table->string('bookname');
            $table->string('category_name');
            $table->string('author_name');
            $table->string('average_rating')->nullable();
            $table->string('voter');
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
        Schema::dropIfExists('listbook');
    }
}
