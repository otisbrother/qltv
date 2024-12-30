<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('bookid'); // Khóa chính
            $table->string('title', 255);
            $table->string('author', 255);
            $table->string('isbn', 255);
            $table->integer('publishedyear');
            $table->string('genre', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
