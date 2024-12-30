<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingsTable extends Migration
{
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id('borrowings'); // Khóa chính
            $table->unsignedBigInteger('bookid'); // Kiểu dữ liệu phải khớp với id trong bảng books
            $table->integer('memberid');
            $table->date('borrowingsdate');
            $table->date('duedate');
            $table->date('returnedDate')->nullable();
            $table->timestamps();

            // Ràng buộc khóa ngoại
            $table->foreign('bookid')->references('bookid')->on('books')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
}
